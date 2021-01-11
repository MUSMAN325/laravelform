<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;

class mycontroller extends Controller
{
    //

    function insert(Request $req){

        $Name = $req->get('name');
        $Email = $req->get('email');
        $Password = $req->get('password');


        $result = new signup();

        $result->Name =  $Name;
        $result->Email =  $Email;
        $result->Password = $Password;

        $result->save();

        return redirect('/userlogin');

    }
    function login(Request $req){
        $Username = $req->get('userEmail');
        $Userpass = $req->get('userPassword');
        $Result = count(signup::all()->where('Email',$Username)->where('Password',$Userpass));
        if($Result > 0){
            echo "success";
        }
        else{
            echo "incorrect";
        }
            //  $check = signup::all();
            //  return $check;
        // $check = $req->input();
        //  return $check;


    }

}
