<?php


namespace modules\DataProviderX\Controllers;

use App\Http\Traits\ApiDesignTrait;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\{
    Hash, Validator
};
use modules\BaseController;
use modules\DataProviderX\Interfaces\DataProviderXInterface;



class DataProviderXController extends BaseController
{
    use ApiDesignTrait;

    private $dataProviderXInterface;

    public function __construct(DataProviderXInterface $dataProviderXInterface)
    {
        $this->dataProviderXInterface = $dataProviderXInterface;
    }


}
?>
