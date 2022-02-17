<?php

namespace modules\DataCollection\Repositories;

use App\Http\Filter\FilterHelper;
use App\Http\Resources\Resources\AllDadaCollectedResource;
use App\Http\Resources\Resources\DadaProviderXResource;
use App\Http\Resources\Resources\DadaProviderYResource;
use App\Http\Traits\ApiDesignTrait;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use Illuminate\Http\Resources\CollectsResources;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use modules\Customers\Models\Customer;
use modules\DataCollection\Interfaces\DataCollectionInterface;
use modules\DataCollection\Models\DataCollection;
use modules\DataProviderX\Models\DataProviderX;
use modules\DataProviderY\Models\DataProviderY;


class DataCollectionRepository implements DataCollectionInterface
{

    use ApiDesignTrait;

    private $dataProviderX;
    private $dataProviderY;
    private $customer;
    private $resultProvider;
    private $resultStatus;
    private $resultBalance;
    private $resultCurrency;


    public function __construct(DataProviderX $dataProviderX, DataProviderY $dataProviderY, Customer $customer) {

        $this->dataProviderY = $dataProviderY;
        $this->dataProviderX = $dataProviderX;
        $this->customer = $customer;
    }


    //Get all Data Collection from both providers
    public function index($request)
    {
        $validation = Validator::make($request->all(), [
            'provider' =>  'string',
            'status' => 'string|in:authorised,decline,refunded',
            'balance_from' =>  'numeric',
            'balance_to' =>  'numeric',
            'currency' =>  'string|in:EUR,USD,EGP,AED',
        ]);
        if ($validation->fails()) {
            return $this->ApiResponse(400, 'Validation Error', $validation->errors());
        }



//        $filterConditions = $request->only(['provider', 'status', 'balance', 'currency']);
        $dataProviderX = $this->dataProviderX->all();
        $dataProviderY = $this->dataProviderY->all();

        $dataProviderXCollection = DadaProviderXResource::collection($dataProviderX);
        $dataProviderYCollection = DadaProviderYResource::collection($dataProviderY);

        $data = $dataProviderXCollection->merge($dataProviderYCollection);
        $this->resultTotal = $data;

        $query = $data;
        if($request->provider) {
            $name = '\modules\\' . $request->provider . '\\Models\\' . $request->provider;
            $query = $name::get();
            $this->resultProvider = $query;
        }
        if($request->status) {
            if($request->status == 'authorised'){
                $query = $data->where('statusCode', 1)->merge($data->where('status', 100));
            }elseif($request->status == 'decline'){
                $query = $data->where('statusCode', 2)->merge($data->where('status', 200));
            }elseif($request->status == 'refunded'){
                $query = $data->where('statusCode', 3)->merge($data->where('status', 300));
            }
            $this->resultStatus = $query;
        }
        if($request->balance_from and $request->balance_to) {

            $query = $this->dataProviderY->whereBetween('balance', [request('balance_from'),request('balance_to')])->get();
            $this->resultBalance = $query;
        }

        if($request->currency) {
            $currency = $request->currency;
            $query = $data->where('currency', $currency);
            $this->resultCurrency= $query;
        }


        $results = $query
            ->union($this->resultProvider)
            ->union($this->resultCurrency)
            ->union($this->resultBalance)
            ->union($this->resultStatus);



        return $this->ApiResponse(200, 'Data Collection', null, $results);
    }





}
