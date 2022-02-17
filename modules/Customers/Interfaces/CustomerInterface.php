<?php
namespace modules\Customers\Interfaces;


interface CustomerInterface {

    public function register($request);
    public function login($request);
    public function logout();

//    public function verify($request, $id);

}
