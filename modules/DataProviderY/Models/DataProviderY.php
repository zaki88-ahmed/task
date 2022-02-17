<?php

namespace modules\DataProviderY\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;





class DataProviderY extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'data_provider_y';
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];



}
