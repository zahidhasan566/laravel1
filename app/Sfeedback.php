<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sfeedback extends Model
{
    protected $table = "feedback";

    protected $primaryKey = "receiver";
    public $timestamps = false;

    //const CREATED_AT = 'create_time';
    //const UPDATED_AT = 'update_time';
}
