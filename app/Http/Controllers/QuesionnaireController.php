<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Place;
use App\Services\QuesionnaireService;

class QuesionnaireController extends Controller
{
    public function AddQuestionnaire(){

        return view('admin.addQuestion');   
    }

    public function ShowQuestionnaire(){
        $data = Questionnaire::all();
        return view('admin.ShowQuestionnaire',compact('data'));   
    }

    public function deleteQuestion($id){
        $data = Questionnaire::find($id);
        $data->delete();
        return redirect()->back()->with('message','your question has been deleted successfuly');

    }

    public function updateview($id){
        $data = Questionnaire::find($id);

        return view('admin.updateview',compact('data'));

    }
    


    public function UploadQuestion(Request $request){

        $data  = new Questionnaire;


        
        $data->question =  $request->question_title;
        $data->question_type =  $request->question_type;
        $data->answer_one =  $request->answer_one;
        $data->answer_two =  $request->answer_two;
        $data->answer_three =  $request->answer_three;
        $data->statues = $request->question_statues;
        
        $data->save();
        return redirect()->back()->with('message','your question has been added successfuly');
        
        


    }
    public function updateQuesionnaire(Request $request,$id){

        $data  = Questionnaire::find($id);


        $data->question =  $request->question_title;
        $data->question_type =  $request->question_type;
        $data->answer_one =  $request->answer_one;
        $data->answer_two =  $request->answer_two;
        $data->answer_three =  $request->answer_three;
        $data->statues = $request->question_statues;
        $data->save();
        return redirect()->back()->with('message','your question has been updated successfuly');
        
        


    }

    public function QuestionnaireView (){



        $all_stored_quesionnaires = QuesionnaireService::ListAllQuesionnaires();

        return view('User.user_quesionnaire',compact('all_stored_quesionnaires'));
        
    }


    //
}
