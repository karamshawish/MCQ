<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\Exam;
class questionController extends Controller
{
    //
    public function index($id){
        
        $Questions = Questions::all()->where('exam_id',1);
        return view("questionViews.question")->withQuestions($Questions);
    	
    }

    
    public function store($id,Request $request){
        
        $newQuestion = new Question; 
        $newQuestion->content = $request->input('question');
        $newQuestion->exam_id = $id;
        $newQuestion->choice1 = $request->input('ch1');
        $newQuestion->choice2 = $request->input('ch2');
        $newQuestion->choice3 = $request->input('ch3');
        $newQuestion->choice4 = $request->input('ch4');
        $newQuestion->correctAnswer = $request->input('answer');
        $newQuestion->save();

        return redirect("exam/$id/question");
    }
    public function show($id){

    	return "show ".$id;
    }
    public function edit($id){

    	return "edit ".$id;
    }
    public function update($id){

    	return "update ".$id;
    }
    public function destroy($id){

    	return "destroy ".$id;
    }
}
