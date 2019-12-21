<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stransition extends Model
{
    protected $table = "account";

    protected $primaryKey = "serviceid";
    public $timestamps = false;

    //const CREATED_AT = 'create_time';
    //const UPDATED_AT = 'update_time';
}
