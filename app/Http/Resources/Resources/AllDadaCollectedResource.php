<?php

namespace App\Http\Resources\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllDadaCollectedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [

                'DataProviderX.parentAmount' => $this->parentAmount,
                'DataProviderXcurrency' => $this->currency,
                'DataProviderX.parentEmail' => $this->parentEmail,
                'DataProviderX.statusCode' => $this->statusCode,
                'DataProviderX.registerationDate' => $this->registerationDate,
                'DataProviderX.parentIdentification' => $this->parentIdentification,


                'DataProvidery.balance' => $this->balance,
                'DataProvidery.currency' => $this->currency,
                'DataProvidery.email' => $this->email,
                'DataProvidery.status' => $this->status,
                'DataProvidery.created_at' => $this->created_at,
                'DataProvidery.id' => $this->id,

        ];
    }
}
