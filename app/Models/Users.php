<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "user";
    protected $dateFormat = "U";
      protected $guarded = [];
}
