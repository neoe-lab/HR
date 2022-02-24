<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // view all users
    public function index(){
        return view('usermanagement.view_user');

    }

    // view details user
    public function view_user(){

    }
    // view profile user
    public function view_profile(){

    }

    // add user new
    public function new_user(){
        return view('usermanagement.add_new_user');
    }
}
