<?php


namespace modules\Customers\Controllers;

use App\Http\Traits\ApiDesignTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Hash, Validator
};
use modules\BaseController;
use modules\Customers\Interfaces\CustomerInterface;
use modules\Customers\Models\Customer;
use modules\Customers\Requests\CustomerFormRequest;
use modules\Customers\Requests\OrderFormRequest;
use modules\Customers\Requests\LoginRequest;
use modules\Customers\Requests\RegisterRequest;
use modules\Customers\Requests\UpdateCustomerRequest;
use modules\Customers\Requests\UpdatePasswordRequest;


class CustomerController extends BaseController
{
    use ApiDesignTrait;


    private $CategoryInterface;
    private $customerInterface;

    public function __construct(CustomerInterface $customerInterface)
    {
        $this->customerInterface = $customerInterface;
    }



    public function register(CustomerFormRequest $request){
//        return('ss');
        return $this->customerInterface->register($request);
    }


    public function login(CustomerFormRequest $request){
        return $this->customerInterface->login($request);
    }




    public function logout(){
        return $this->customerInterface->logout();
    }



//    public function verify(Request $request, $id){
//        return $this->customerInterface->verify($request, $id);
//    }


}
