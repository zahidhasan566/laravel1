<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $request,$id){

        if($request->session()->has('username')) {
            //$stds = \App\User::all();
            // $std = User::all();
            $user = User::find($id);
            //echo($id);

            return view('home.index')->with('user', $user);
        }

    }


    }












