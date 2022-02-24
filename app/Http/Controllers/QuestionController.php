<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function performance()
    {
        return view('evaluations.performance.performance_form');
    }
    public function relationship(){
        return view('evaluations.relationship.relationship_form');
    }
}
