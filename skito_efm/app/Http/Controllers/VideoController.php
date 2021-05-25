<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\video;
use App\Models\teatcher;
use App\Models\Resources;
use App\Models\course;
class VideoController extends Controller
{
    //
    //public static $fv = null;
    public function GetVideosOfCourse($id){
        $videos = video::where('course_id','=',$id)->get();
        //if(is_null(VideoController::$fv)){
        $fv = video::where('course_id','=',$id)->first();
        //}
        $id_video = null;
        if(count($videos)>0){
            $id_video = $fv->video_id;
        }

        $idd = Auth::id();
        $tr = 0;
        $myCourseState = 0;
        $videoExists = 0;
        //$res = null;
        $res = Resources::where('video_id','=',$id_video)->get();
        /*
        if(video::where('video_id','=',$id)->exists()){
            $videoExists = 1;
            $res = Resources::where('video_id','=',$id_video)->get();
        }
        */

        $course = course::where('course_id','=',$id)->first();
        /*if(course::where('id_teatcher','=',$idd)->exists()){
            $myCourseState = 1;
        }*/
        //$tr = 0;
        if(teatcher::where('id_teatcher','=',$idd)->exists()){
            $tr = 1;
        }

        return view('videos.videobycourse')->with('videos',$videos)
        ->with('id',$id)
        ->with('tr',$tr)
        ->with('idd',$idd)
        ->with('res',$res)
        ->with('id_video',$id_video)
        ->with('videoExists',$videoExists)
        ->with('course',$course)
        ->with('myCourseState',$myCourseState)
        ->with('fv',$fv);
    }
    public function Add_Video_Get($id){
        return view('videos.Add_Video_Get')->with('id',$id);
    }
    public function Add_Video_post(Request $request){
        $file = $request->file('video_path');


        $filename = $file->getClientOriginalName();
        //Move Uploaded File
        $destinationPath = public_path('videos');
        $file->move($destinationPath,$file->getClientOriginalName());

        $newVideo = video::create([
            'title_video'=> $request->title_video,
            'video_path'=>$filename,
            'course_id'=>$request->course_id
        ]);

        return redirect()->route('GetVideosOfCourse',['id'=>$request->course_id]);
    }
    public function ChangeVideo($id,$course_id){
        //$fv = video::where('video_id','=',$id)->first();
        //return redirect()->route('GetVideosOfCourse',['id'=>$course_id])->with('fv',$fv);
        //return back()->with('fv',$fv);
        $videos = video::where('course_id','=',$course_id)->get();
        //if(is_null(VideoController::$fv)){
        $fv = video::where('video_id','=',$id)->first();
        //}
        $id_video = null;
        if(count($videos)>0){
            $id_video = $fv->video_id;
        }
        $course = course::where('course_id','=',$course_id)->first();
        $idd = Auth::id();
        $tr = 0;
        if(teatcher::where('id_teatcher','=',$idd)->exists()){
            $tr = 1;
        }
        $res = Resources::where('video_id','=',$id_video)->get();
        return view('videos.videobycourse')->with('videos',$videos)
        ->with('id',$id)
        ->with('tr',$tr)
        ->with('course',$course)
        ->with('idd',$idd)
        ->with('id_video',$id_video)
        ->with('res',$res)
        ->with('fv',$fv);
    }
    public function DeleteVideoOfCourse($id,$course_id){
        $video = video::where('video_id','=',$id);
        $videoDelete = video::where('video_id','=',$id)->first();
        //$course = video::where('course_id','=',$course_id)->get();
        File::delete(public_path('videos/'.$videoDelete->video_path));
        $video->delete();
        //$fv = video::where('course_id','=',$id)->first();

        return redirect()->route('GetVideosOfCourse',['id'=>$course_id]);
    }
    public function Add_Resources_Videos($id){
        return view('videos.Add_Resources_Videos')->with('id',$id);
    }
    public function Add_Resources_Videos_post(Request $request){
        $file = $request->file('resources_file_name');

        $validatefile = $request->validate([
            'resources_file_name'=>'required|mimes:pdf'
        ]);
        $filename = $file->getClientOriginalName();
        //Move Uploaded File
        $destinationPath = public_path('ResourcesCourse');
        $file->move($destinationPath,$file->getClientOriginalName());

        $newResources = Resources::create([
            'resource_name'=> $request->resource_name,
            'resources_file_name'=>$filename,
            'resources_desc'=>$request->resources_desc,
            'video_id'=>$request->video_id
        ]);
        $video_id = $request->video_id;
        $video = video::where('video_id','=',$video_id)->first();
        return redirect()->route('GetVideosOfCourse',['id'=>$video->course_id ]);
    }
    public function Delete_Resources_Videos($id){
        $resource = Resources::find($id);
        File::delete(public_path('ResourcesCourse/'.$resource->resources_file_name));
        $resource->delete();
        return back();
    }
}
