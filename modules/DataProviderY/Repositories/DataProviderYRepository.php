<?php

namespace modules\DataProviderY\Repositories;

use App\Http\Resources\OrderResource;
use App\Http\Traits\ApiDesignTrait;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use modules\DataProviderY\Interfaces\DataProviderYInterface;

class DataProviderYRepository implements DataProviderYInterface
{

    use ApiDesignTrait;






}
