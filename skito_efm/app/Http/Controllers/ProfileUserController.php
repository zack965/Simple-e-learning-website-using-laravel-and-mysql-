<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\student_doc;
use App\Models\teatcher;
use App\Models\User;
class ProfileUserController extends Controller
{
    //
    public function Student_details_get(){
        $user = Auth::user();
        //$cr = User::find($user->id);
        return view('student.student_register')->with('user',$user);
    }
    public function Student_details_post(Request $request){
        $user = Auth::user();
        $validate = $request->validate([
            'student_age'=>'required',
            'student_years_experiance'=>'required'
        ]);
        student_doc::create([
            'student_id'=>$request->student_id,
            'student_age'=>$request->student_age,
            'student_years_experiance'=>$request->student_years_experiance
        ]);
        $cr = User::find($user->id);
        $cr->active = 1;
        $cr->save();
        return redirect()->route('get_Courses');
    }
    public function Teatcher_details_get(){
        $user = Auth::user();
        return view('teatcher.taetcher_register')->with('user',$user);;
    }
    public function Teatcher_details_post(Request $request){
        $user = Auth::user();
        $validate = $request->validate([
            'age_teatcher'=>'required',
            'teatcher_years_experiance'=>'required'
        ]);
        teatcher::create([
            'id_teatcher'=>$request->id_teatcher,
            'age_teatcher'=>$request->age_teatcher,
            'teatcher_years_experiance'=>$request->teatcher_years_experiance
        ]);
        $cr = User::find($user->id);
        $cr->active = 1;
        $cr->save();
        return redirect()->route('get_Courses');
    }
    //taetcher_register
}
