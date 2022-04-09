<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function showlogin()
    {
        return view('admin.login');
    }

    public function login(Request $request){
   
        Validator::validate($request->all(),[
            'email'=>['email','required'],
            'pass'=>['required']


        ],[
            'email.required'=>'this field is required',
            'pass.required'=>'this field is required',
            
        ]);

        // $u=new user();
        // $u->name=$request->input('email');
        // $u->save();

    }

    
    public function signup()
    {
        return view('admin.signup');
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'email'=>['required','email','unique:users,email'],
            'pass'=>['required','min:5'],
            'confirm'=>['same:pass']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'pass.required'=>'password is required',
            'pass.min'=>'password should not be less than 3',
            'confirm.same'=>'password dont match',


        ]);

        $u=new user();
        $u->firstname=$request->name;
        $u->password=Hash::make($request->pass);
        $u->email=$request->email;
        if($u->save())
        return redirect()->route('index')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }


}
