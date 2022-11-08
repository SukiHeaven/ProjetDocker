<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
       
        $answers = Answer::all();

        return view('question.index',['answers'=>$answers,]);
    }
}
