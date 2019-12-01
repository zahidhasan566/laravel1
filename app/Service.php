<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "service";

    protected $primaryKey = "spid";
    public $timestamps = false;
}
