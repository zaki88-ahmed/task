<?php

namespace modules\DataCollection\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DadaCollectionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->getCustomerRules($this->input('class'));
    }

    public function getCustomerRules($class)
    {
        $rules = [];
        switch($class){
            case "index":
                $rules = [
                    'provider' =>  'string',
                    'status' => 'string|in:authorised,decline,refunded',
                    'balance_from' =>  'numeric',
                    'balance_to' =>  'numeric',
                    'currency' =>  'string|in:EUR,USD,EGP,AED',
                ];
                break;
        }
        return $rules;
    }
}
