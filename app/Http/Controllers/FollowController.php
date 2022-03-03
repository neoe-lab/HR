<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow_performance()
    {
        return view('follows.follow_performance');
    }

    public function follow_relationship()
    {
        return view('follows.follow_relationship');
    }
}
