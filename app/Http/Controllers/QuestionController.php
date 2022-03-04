<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Http\Request;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{


    // show person and self evaluation performance
    public function listPersonPerformance(){



        return view('evaluations.performance.list_person');
    }


    public function answerPerformance(Request $request){
        // $d = $request->all();
        // dd($d);
        // ไอดีเจ้าของคนประเมิน ณ ครั้งนั้น
        $who = $request->who;
        // หัวข้อ
        $num =$request->num;
        // คะแนน
        $score = $request->score;

        for($i=0;$i<count($num);$i++){

            $datasave = [
                'who_id' => $who,
                'no_q' => $num[$i],
                'score' => $score[$i],

            ];

            DB::table('answers')->insert($datasave);

        }


        // dd($datasave);

        // Answer::create([
        //     'who_id' => 56,
        //     'no_q' => 11,
        //     'score' => 5,
        // ]);







    }

    public function performance()
    {
        return view('evaluations.performance.performance_form5');
    }
    public function relationship(){
        return view('evaluations.relationship.relationship_form');
    }
}
