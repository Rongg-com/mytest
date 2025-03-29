<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managerPage extends Controller
{

    public function userList(){
        return "All User";
    }
    public function userEdit(){
        return "Edit User";
    }
    public function userDelete(){
        return "Delete User";
    }
}
