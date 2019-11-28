<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    function index(){
        return view('login.index');
    }

    function verify(Request $request){

        $users = User::all();

        $userid = User::where('username', $request->username)
                    ->where('password', $request->password)
                    ->get('userid');

        $type = User::where('username', $request->username)
            ->where('password', $request->password)
            ->get('type');

        foreach($type as $usertype)
        {
            $usertype= $usertype->type ;

        }


       if(count($userid) > 0 && $usertype==1){
            $request->session()->put('username', $request->input('username'));
            foreach($userid as $servicepid)
            {
              $id= $servicepid->userid ;
                return redirect()->route('home.index',$id);
            }


        }else{

            $request->session()->flash('msg', 'invalid username/password');
            echo("invalid");

        }
    }
}


