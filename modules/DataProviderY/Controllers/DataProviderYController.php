<?php


namespace modules\DataProviderY\Controllers;

use App\Http\Traits\ApiDesignTrait;
use App\Http\Traits\ApiResponseTrait;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\{
    Hash, Validator
};
use modules\BaseController;
use modules\DataProviderY\Interfaces\DataProviderYInterface;


class DataProviderYController extends BaseController
{
    use ApiDesignTrait;

    private $dataProviderYInterface;

    public function __construct(DataProviderYInterface $dataProviderYInterface)
    {
        $this->dataProviderYInterface = $dataProviderYInterface;
    }


}
?>
