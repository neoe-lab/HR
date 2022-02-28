<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Http\Request;

class QuestionController extends Controller
{


    // show person and self evaluation performance
    public function listPersonPerformance(){



        return view('evaluations.performance.list_person');
    }


    public function answerPerformance(Request $request){
        $score = $request->all();
        dd($score);

    }

    public function performance()
    {
        return view('evaluations.performance.performance_form');
    }
    public function relationship(){
        return view('evaluations.relationship.relationship_form');
    }
}
