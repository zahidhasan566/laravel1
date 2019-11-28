<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
      function profile($id){

          $user = User::find($id);
             //echo($id);
                return view('profile.index')->with('user', $user);
            }

    function update(Request $request,$id){

        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->city = $request->city;
        $user->password = $request->password;
        //echo($id);
        //$user->update();
       // return redirect()->route('home.index',$id);
        if($user->update()){
            return redirect()->route('home.index',$id);
        }else{
            return redirect()->route('profile.index');
        }

    }
    function delete($id){

        $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('userid', $id)->delete();
            return redirect()->route('login.index');
        }else{
            return redirect()->route('profile.index',$id);
        }



    }



}
