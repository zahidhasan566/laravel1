<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Stransition;

class StransitionController extends Controller
{
    function index($id){

        $user = User::find($id);
        $receiver=$id;

        $stransition =DB::table('account')
         ->join('user','account.cid','=','user.userid')
         ->select('account.*','user.username')
         ->get();

        //$stransition = Stransition::where('serviceid',  $receiver)
                     //->get();



        if(count($stransition)>0)
        {
             //echo($sfeedback);
            return view('stransition.index')->with('user', $user)->with('stransition', $stransition);
        }

        else {
            echo("no transition request for u");
        }

    }
}
