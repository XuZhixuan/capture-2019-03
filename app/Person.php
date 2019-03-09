<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

//    protected $table = 'people';
}
