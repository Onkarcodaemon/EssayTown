<?php

namespace App\Http\Controllers;
use App\Models\user_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
    public function index(Request $req)
    {
        $email=$req->email;
        $pass=$req->password;
        $a=user_data::where('email','=',$email)->first();

        if($a!="")
        {
            
           if($pass==$a['password']) 
            {
                // The passwords match...
              
            //return "Login Succesfull";
            }
            else
            {
                return "invalid";
                // session()->flash('login','Invalid Password');
                //  return redirect('log-in');
            }
            
        }
       
    }
}
