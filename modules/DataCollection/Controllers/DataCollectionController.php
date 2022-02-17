<?php


namespace modules\DataCollection\Controllers;

use App\Http\Traits\ApiDesignTrait;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\{
    Hash, Validator
};
use modules\BaseController;
use modules\DataCollection\Interfaces\DataCollectionInterface;
use modules\DataCollection\Requests\DadaCollectionFormRequest;
use modules\DataCollection\Requests\DataCollectionRequest;
use modules\DataProviderX\Interfaces\DataProviderXInterface;



class DataCollectionController extends BaseController
{
    use ApiDesignTrait;

    private $dataCollectionInterface;

    public function __construct(DataCollectionInterface $dataCollectionInterface)
    {
        $this->dataCollectionInterface = $dataCollectionInterface;
    }

    public function index(DadaCollectionFormRequest $request)
    {
        return $this->dataCollectionInterface->index($request);
    }



}
?>
