<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snotice extends Model
{
    protected $table = "notice";

    protected $primaryKey = "userid";
    public $timestamps = false;

}
