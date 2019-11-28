<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sappointment extends Model
{
    protected $table = "appointment";

    protected $primaryKey = "serviceid";
    public $timestamps = false;

    //const CREATED_AT = 'create_time';
    //const UPDATED_AT = 'update_time';
}
