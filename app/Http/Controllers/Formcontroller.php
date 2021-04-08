<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\Result;
use App\Models\ResultHistory;

class Formcontroller extends Controller
{
    public function showdata()
    {
        $form = form::all();
        return view('model.index',compact('form'));
    }
    public function getall()
    {

        $id = 0;
        $form = form::all();
        return view('model.solve',compact('form','id'));
    }
    public function nextquestion(Request $request)
    {
        if(!$request->has('id'))
        {
            $id = $request->id+1;
            $form = form::find($id);     
        }
        else 
        {
            $answer = $request->exampleRadios;
            $result = new ResultHistory;
            $id = $request->id;
            $form = form::find($id);
            $result->Question = $request->id;
            $result->AttemptedAnswer = $answer;
            $result->CorrectAnswer = $form->answer;
            $result->save();
            $id = $request->id+1;
            $form = form::find($id);
        }    
        if(is_null($form))
        {
            $result = ResultHistory::all();
            $count = 0;
            foreach($result as $singlerecord)
            {
                $UserAnswer = $singlerecord->AttemptedAnswer;
                $CorrectAnswer = $singlerecord->CorrectAnswer;
                if($UserAnswer == $CorrectAnswer)
                {
                    $count = $count + 1;
                }   
                else 
                {
                    $count = $count; 
                }
            }
            $FinalResult = new Result;
            $FinalResult->TotalMarks = $count;
            $FinalResult->save();
            return view('model.complete');
        }
        else 
        {
            return view('model.singleq',compact('form','id'));

        }

        
    }
}
