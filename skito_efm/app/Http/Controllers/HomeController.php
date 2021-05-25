<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\student_doc;
use App\Models\teatcher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $currentUser = User::find($user->id);
        $id = Auth::id();
        //$cs = student_doc::find($id);
        if(student_doc::where('student_id',$id)->exists()){

            return redirect()->route('all_courses');
        }else{
            if($user->id_user_type == 2){
                return redirect()->route('Student_details_get');
            }
        }
        if(teatcher::where('id_teatcher',$id)->exists()){

            return redirect()->route('all_courses');
        }else{
            if($user->id_user_type == 1){
                return redirect()->route('Teatcher_details_get');
            }
        }

        return view('home');
    }
}
