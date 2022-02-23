<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('usermanagement.view_user');

    }
    public function new_user(){
        return view('usermanagement.add_new_user');
    }
}
