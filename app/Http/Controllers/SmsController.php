<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sms;

class SmsController extends Controller
{
    function sms($id){

        $user = User::find($id);
        $receiverid=$id;
        $sms = Sms::find($receiverid);
       return view('sms.index')->with('user', $user)->with('sms',$sms);
    }
    function reply(Request $request,$id){

        $user = User::find($id);
        $receiverid=$id;
        $sms = Sms::find($receiverid);

        $sms->senderid = $receiverid;
        $sms->receiverid = $request->senderid;
        $sms->message = $request->msgreply;


        if($sms->save()){
            return redirect()->route('home.index',$id);
        }else{

            return redirect()->route('sms.index',$id);
        }


    }
}
