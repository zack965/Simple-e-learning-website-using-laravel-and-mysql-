<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
//use Request;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\course;
use App\Models\teatcher;
use App\Models\video;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Request;

//use Image;
use Intervention\Image\Facades\Image;
class CourseController extends Controller
{
    public function get_Courses(){

        $id = Auth::id();
        $courses = course::where('id_teatcher','=',$id)->get();
        $user = User::find($id);
        $user = Auth::user();
        if($user->id_user_type == 2){
            return view('student.ListCourses')
            ->with('courses',$courses)
            ->with('id',$id);
        }else if($user->id_user_type == 1){
            //$courses = course::where('id_teatcher','=',$id)->get();
            //$vd = video::where('course_id','=',$courses->course_id)->first();
            return view('teatcher.ListCourses')
            ->with('courses',$courses)
            //->with('vd',$vd)
            ->with('id',$id);
        }
        /*
        if(User::where('id_user_type',"=",2)){

        }else if(User::where('id_user_type',"=",1)){

        }
        */

    }
    public function all_courses(){
        $courses = course::all();
        $ex = 0;


        return view('courses.ListCourses')->with('courses',$courses);
    }
    public function Add_Courses_Get(){
        return view('courses.Add_Courses_Post');
    }
    public function Add_Courses_Post(Request $request){
        $file = $request->file('course_thumnail');


        $filename = $file->getClientOriginalName();
        //Move Uploaded File
        $destinationPath = public_path('uploads');
        $file->move($destinationPath,$file->getClientOriginalName());

        $NewCourse = course::create([
            'course_title'=> $request->course_title,
            'course_description'=>$request->course_description,
            'course_thumnail'=>$filename,
            'id_teatcher'=>Auth::id()
        ]);

        return redirect()->route('get_Courses');
    }
    public function DeleteCourse($id){
        $course = course::where('course_id','=',$id)->delete();
        return redirect()->route('get_Courses');
    }

}
