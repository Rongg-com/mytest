<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
   public function userLogin(Request $req){
        $username = $req->input('txtname');
        $password = $req->input('txtpass');

        if($username != '' && $password != '' ){
            $req->session()->put('username', $username);
            return redirect('/dashboard');
        }else{
            $req->session()->flash('error', 'Invalid username or password');
            return redirect('/');
        }
    }
}
