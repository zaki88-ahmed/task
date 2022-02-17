<?php

namespace modules\DataProviderX\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;





class DataProviderX extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'data_provider_x';

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];







}
