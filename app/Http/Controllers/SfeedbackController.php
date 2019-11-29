<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sfeedback;

class SfeedbackController extends Controller
{
    function index($id){

        $user = User::find($id);
        $receiver=$id;



        $sfeedback = Sfeedback::where('receiver',  $receiver)
                     ->get();



        if(count($sfeedback)>0)
        {
             //echo($sfeedback);
            return view('sfeedback.index')->with('user', $user)->with('sfeedback', $sfeedback);
        }

        else {
            echo("no feedback request for u");
        }

    }
}
