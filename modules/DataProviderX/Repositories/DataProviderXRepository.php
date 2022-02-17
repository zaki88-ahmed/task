<?php

namespace modules\DataProviderX\Repositories;

use App\Http\Resources\OrderResource;
use App\Http\Traits\ApiDesignTrait;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use modules\OrderProduct\Models\OrderProduct;
use modules\Orders\Interfaces\OrderInterface;
use modules\Orders\Models\Order;

class DataProviderXRepository implements DataProviderXInterface
{

    use ApiDesignTrait;






}
