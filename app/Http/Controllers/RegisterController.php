<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
//use App\Http\Requests\RegRequest;
use Validator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;


class RegisterController extends Controller
{
    function index(Request $request){
    return view('register.register');
    }

    function store(Request $request){
        $validation = Validator::make($request->all(), [
            'username'=>'required',
            'password'=>'required',
            'email'=>'required|unique:user|email:rfc',
            'phone'=>'required|unique:user|max:11|min:11',
            'city'=>'required',
            'skill'=>'required',
            'price'=>'required'

        ]);
        if($validation->fails()){

            return back()->with('errors', $validation->errors())->withInput();

        }

        $user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->city =$request->city;
        $user->gender =$request->gender;
        $user->type =1;
        $user->save();

        $sv = User::where('phone', $request->phone)
        ->first();
        DB::table('service')->insert(
            ['spid' => $sv->userid,'userid' => $sv->userid,'servicename' => $request->skill, 'price' => $request->price, 'description' => $request->description]
        );

        return redirect()->route('login.index');

        }



}
