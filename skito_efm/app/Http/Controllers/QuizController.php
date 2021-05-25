<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\teatcher;
use App\Models\student_doc;
use App\Models\user_ans;
use App\Models\UserQuize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class QuizController extends Controller
{
    //
    public static $x = 0;
    public function All_Quizes(){
        $userId = Auth::id();
        $quizes = Quiz::all();
        return view('Quiz.All_Quizes')->with('quizes',$quizes)->with('userId',$userId);
    }
    public function Teatcher_Quizes(){
        $userId = Auth::id();
        $quizes = Quiz::where('quiz_teatcher',$userId)->get();
        return view('Quiz.Teatcher_Quizes')->with('quizes',$quizes)->with('userId',$userId);
    }
    public function Add_Quiz_Get(){
        return view('Quiz.Add_Quiz_Get');
    }
    public function Add_Quiz_Post(Request $request){
        $val = $request->validate([
            'quiz_title'=>'required',
            'quiz_technology'=>'required'
        ]);
        $userId = Auth::id();
        Quiz::create([
            'quiz_title'=>$val['quiz_title'],
            'quiz_technology'=>$val['quiz_technology'],
            'quiz_teatcher'=>$userId
        ]);
        return redirect()->route('All_Quizes');
    }
    public function See_Questions_teatcher($id_q){
        $fq = null;
        $questions = Question::where('question_quiz',$id_q)->get();
        return view('Quiz.See_Questions')
        ->with('id_q',$id_q)
        //->with('fq',$fq)
        ->with('questions',$questions);
    }
    public function quize_data_user($id_u){
        $userId = Auth::id();
        $quistd = UserQuize::where('id_user',$userId)
        ->join('quizzes','user_quizes.id_quize','quizzes.quiz_id')
        ->get();
        return view('Quiz.quize_data_user')->with('quistd',$quistd);
    }
    public function delete_quize_data_user($id_ud){
        $q = UserQuize::where('id_user_quize',$id_ud)->first();
        $q->delete();
        $userId = Auth::id();
        return redirect()->route('quize_data_user',['id_u'=>$userId]);

    }
    public function See_Questions($id_q){
        $view = '';
        $questions = Question::where('question_quiz',$id_q)->get();
        $fq = null;
        $userId = Auth::id();
        //$quize = UserQuize::where('id_quize',$id_q)->where('id_user',$userId)->first();
        if(UserQuize::where('id_quize',$id_q)->where('id_user',$userId)->exists()){
            //$view = 'error.AccessDenied';
            return view('error.AccessDenied');
        }else{
            try {
                if(Question::where('question_quiz',$id_q)->exists()){
                    $fq = Question::where('question_quiz',$id_q)->first();
                    UserQuize::create([
                        'id_quize'=>$fq->question_quiz,
                        'id_user'=>$userId,
                        'is_enrolled'=>1
                    ]);
                    //return redirect()->route('Next',['id_q'=>$fq->question_id,'id_quize'=>$fq->question_quiz]);
                    return view('Quiz.pass_quiz')->with('fq',$fq);
                }
            } catch (\Illuminate\Database\QueryException $ex) {
                //throw $th;
                return view('error.AccessDenied');
            }
            //$view='Quiz.pass_quiz';
        }



        /*return view($view)
        ->with('id_q',$id_q)
        ->with('fq',$fq)
        ->with('questions',$questions);
        */
    }
    public function Add_Questions_Get($id_qq){
        return view('Questions.Add_Questions_Get')->with('id_qq',$id_qq);
    }
    public function Add_Questions_Post(Request $request){
        $vall = $request->validate([
            'question_text'=>'required',
            'question_right_ans'=>'required',
            'question_wrong_ans_one'=>'required',
            'question_wrong_ans_two'=>'required'
        ]);
        $quiz_id = $request->question_quiz;
        /*
        Question::create([
            'question_text'=>$request->question_text,
            'question_right_ans'=>$request->question_right_ans,
            'question_wrong_ans_one'=>$request->question_wrong_ans_one,
            'question_wrong_ans_two'=>$request->question_wrong_ans_two,
            'question_quiz'=>$quiz_id,
        ]);
        */
        Question::create([
            'question_text'=>$vall['question_text'],
            'question_right_ans'=>$vall['question_right_ans'],
            'question_wrong_ans_one'=>$vall['question_wrong_ans_one'],
            'question_wrong_ans_two'=>$vall['question_wrong_ans_two'],
            'question_quiz'=>$quiz_id,
        ]);
        return redirect()->route('All_Quizes');
    }
    public function Delete_Question($id_q){
        $ques = Question::where('question_id',$id_q)->first();
        $ques->delete();
        return back();
    }
    public function Delete_Quiz($quiz_id){
        $quize = Quiz::where('quiz_id',$quiz_id)->first();
        $quize->delete();
        return back();
    }
    public function Answer(Request $request){
        $id_q = $request->question_id;
        $question = Question::where('question_id',$id_q)->first();
        $nquize = $question->question_quiz;
        $ans_state = "wrong";
        $userId = Auth::id();
        $answer = $request->answer;
        if($question->question_right_ans == $answer){
            $ans_state="right";
            $Ques_Quiz = UserQuize::where('id_quize',$question->question_quiz)->Where('id_user',$userId)->first();
            //$pr = $Ques_Quiz->Rating;
            $Ques_Quiz->Rating = $question->question_note + $Ques_Quiz->Rating;
            $Ques_Quiz->save();
        }
        user_ans::create([
            'user_id' =>$userId,
            'answer_question' =>$id_q,
            'answer_question_id' =>$answer,
            'is_state' =>$ans_state,
        ]);

        if(Question::where('question_id','>',$request->question_id)->where('question_quiz',$nquize)->exists()){
            $nq = Question::where('question_id','>',$request->question_id)->where('question_quiz',$nquize)->first();
            return redirect()->route('Next',['id_q'=>$nq->question_id]);
        }else{
            return redirect()->route('All_Quizes');
        }

        //return redirect()->route('Next',['id_q'=>$nq->question_id]);
    }
    public function Next($id_q){
        //$fq = null;
        //$userId = Auth::id();
        //$fq = Question::where('question_quiz',$id_quize)->first();


        //if(Question::where('question_id','>',$id_q)->exists()){
            $fq = Question::where('question_id',$id_q)->first();
            return view('Quiz.pass_quiz')->with('fq',$fq);
        //}else{
            //return redirect()->route('All_Quizes');
        //}


        //$fq = Question::where('question_id','>',$id_q)->min('question_id');
        /*if($fq->question_id == $id_q){
            return view('Quiz.pass_quiz')->with('fq',$fq);
        }else{
            if(Question::where('question_id','>',$id_q)->exists()){
                //$fq = Question::where('question_id','>',$id_q)->where('question_quiz',$id_quize)->first();
                $fq = Question::where('question_id',$id_q)->first();
                    //$Ques_Quiz = UserQuize::where('id_quize',$fq->question_quiz)->orWhere('id_user',$userId)->first();
                    //$pr = $Ques_Quiz->Rating;
                    //$Ques_Quiz->Rating = $question->question_note + $pr;
                    //$Ques_Quiz->Rating = $fq->question_note + $Ques_Quiz->Rating;
                    //$Ques_Quiz->save();
                    return view('Quiz.pass_quiz')->with('fq',$fq);
            }else{
                    //$fq = Question::where('question_id','=',$id_q)->first();

                return redirect()->route('All_Quizes');
            }
        }*/




    }
    public function CalcScore($id_quize){
        $questions = Question::where('question_quiz','=',$id_quize)->get();
    }
}
