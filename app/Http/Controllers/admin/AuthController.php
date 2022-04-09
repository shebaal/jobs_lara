<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showlogin()
    {
        return view('admin.login');
    }

    public function login(Request $reuest){
        Validator::validate($request->all(),[
            'email'=>['email','required','min:3','max:10','unique:users'],
            'pass'=>['required','min:5']


        ],[
            'email.required'=>'this field is required',
            'email.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
        ]);

        $u=new user();
        $u->name=$request->input('email');
        $u->save();

    }

    
    public function signup()
    {
        return view('admin.signup');
    }
}
