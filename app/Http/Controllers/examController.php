<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exam;
class examController extends Controller
{
    //
     public function index(){
        $exams=Exam::all();
        
    	return view("examViews.exam")->withExams($exams);
    }

    public function create(){

    	return "create";
    }
    public function store(Request $request){
        $newExam = new Exam; 
        $newExam->Name=$request->input('examName');
        $newExam->className=$request->input('className');
        $newExam->available=$request->input('available');
        $newExam->save();
        return redirect('exam');
    }
    public function show($id){

    	return "show ".$id;
    }
    public function edit($id){

    	return "edit ".$id;
    }
    public function update($id){
        $exam = Exam::find($id);
        if($exam->available=="yes"){
            $exam->available ="no";
        }
        else {
            $exam->available="yes";
        }

    	$exam->save();
        return redirect('exam');

    }
    public function destroy($id){

        Exam::destroy($id);
        return redirect('exam');

    }
}
