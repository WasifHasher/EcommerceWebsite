<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function showIndexPage(){
        return view('Login');
    }

    public function Login(Request $req){

        $user = User::where(['email' => $req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password)){

            return "Username and password is not matching...";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
        

        
       
    }
}
