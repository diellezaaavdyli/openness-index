<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }


    public function store(){
        $data =request()->validate([
          'title'=>'required',
          'category'=>'required',
        ]);

        $data['institution_id']

        $questionnaire = \App\Questionnaire::create($data);
    }
}
