<?php

namespace modules\Customers\Repositories;

use App\Http\Traits\ApiDesignTrait;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use modules\BaseRepository;
use modules\Customers\Interfaces\CustomerInterface;
use modules\Customers\Models\Customer;

class CustomerRepository extends BaseRepository implements CustomerInterface
{

    use ApiDesignTrait;



    public function register($request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  => 'required',
            'email'                 => 'required|email|unique:customers,email',
            'password'              => 'required|min:6',
        ]);
        if($validator->fails()) {
            return $this->ApiResponse(400, 'Validation Errors', $validator->errors());
        }
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return $this->ApiResponse(200, 'You are logged in');
    }




    public function login($request)
    {
        // TODO: Implement login() method.

        $data = ["email" => $request->email, "password" => $request->password];
        return $this->auth('customer', $data);
    }



    public function logout()
    {
        // TODO: Implement logout() method.
        $customer = auth('sanctum')->user();
        $customer->tokens()->where('id', $customer->currentAccessToken()->id)->delete();
        return $this->ApiResponse(200, 'Logged out');
    }




    public function verify($request, $id)
    {

        $customer = Customer::find($id);
        $customer->email_verified_at = Carbon::now();
        $customer->save();

        return $this->ApiResponse(200, 'You Are Signed In');

        }



}
