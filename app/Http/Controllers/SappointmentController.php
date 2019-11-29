<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sappointment;

class SappointmentController extends Controller
{
    function index($id){

            $user = User::find($id);
            $serviceid=$id;


            //$sapp=Sappointment::find($serviceid)::;
       $sapp2 = Sappointment::where('serviceid',  $serviceid)
            ->where('request',0)
            ->get();



      if(count($sapp2)>0)
      {
         // echo($sapp2[0]->cid);
          return view('sappointment.index')->with('user', $user)->with('sapp2', $sapp2[0]);
      }

      else {
          echo("no request for u");
      }

        }

    function accept($id){

        $user = User::find($id);
        $serviceid=$id;
        $sapp2 = Sappointment::where('serviceid',  $serviceid)
            ->where('request',0)
            ->get();

        $sapp2[0]->request=1;

        if($sapp2[0]->save()){
            return redirect()->route('home.index',$id);
        }else{

            return redirect()->route('sappointment.index',$id);
        }
    }
    function reject($id){

        $user = User::find($id);
        $serviceid=$id;
        $sapp2 = Sappointment::where('serviceid',  $serviceid)
            ->where('request',0)
            ->get();


            $deletedRows = $sapp2[0]::where('request', '0')->delete();
            return redirect()->route('home.index',$id);


    }












    }

