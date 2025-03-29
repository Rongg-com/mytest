<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class usercont extends Controller
{
    public function userlist(){
        $result = DB::table('users')->get();
        return view("admin.Dashboard", ["users" => $result]);

       /* foreach($result as $user){
            echo $user->id;
            echo $user->name;
            echo $user->email;
        }*/

    }
    public function adduser(){
        $result = DB::table('users')->insert()
        return view("admin.adduser");
    }
}
