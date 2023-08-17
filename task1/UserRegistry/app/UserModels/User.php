<?php

namespace App\UserModels;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
 
    protected $fillable = ['name', 'surname','email','position'];

}
