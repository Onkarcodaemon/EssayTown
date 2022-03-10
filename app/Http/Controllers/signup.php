<?php

namespace App\Http\Controllers;
use App\Models\user_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class signup extends Controller
{
    public function input(Request $req)
    {
        
        $pass=$req->password;
        $password=Hash::make('$pass');
        $user= new user_data();
        $user->First_name=$req->name;
        $user->last_name="";
        $user->email=$req->email;
        $user->password=$pass;
        $user->role="";
        $user->card_number="";
        $user->card_month="";
        $user->card_expire_date="";
        $user->save();
       
       // return "data Imported Succesfully";
       return redirect('sign-up');

       
    }
    
}
