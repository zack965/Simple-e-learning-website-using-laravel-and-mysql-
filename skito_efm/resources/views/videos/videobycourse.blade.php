@extends('layouts.app')

@section('content')
@if($tr == 1)
    @if($course->id_teatcher == $idd)
    <a href="{{route('Add_Video_Get',['id'=>$id])}}" class="btn btn-primary" style="margin-left:30px;">Add Video</a>

    @endif
@endif


<link rel="stylesheet" href="{{asset('css/s.css')}}">
@if(count($videos)>0)
<div id="countainer">
    <div id="linkedVideos">
        @foreach ($videos as $video)
            <a href="{{route('ChangeVideo',['id'=>$video->video_id,'course_id'=>$video->course_id])}}" class="link" id="videos/{{$video->video_path}}" onclick="ngala(id)">
                <div>
                    <p>{{$video->title_video}}</p>
                </div>
                @if($tr == 1)
                    @if($course->id_teatcher == $idd)
                    <a class="btn btn-danger" href="{{route('DeleteVideoOfCourse',['id'=>$video->video_id,'course_id'=>$video->course_id])}}">Delete Video</a>
                    @endif
                @endif
            </a>
        @endforeach
    </div>
    <div id="Video">
        <video controls width="850px"  >
            <source class="videoreal" type="video/mp4" src="{{asset('videos/'.$fv->video_path)}}">

        </video>
    </div>
</div>
@else
  <p>No Videos</p>
@endif
@if(!is_null($id_video) && $course->id_teatcher == $idd)
<a href="{{route('Add_Resources_Videos',['id'=>$id_video])}}" class="btn btn-primary" style="margin-left:30px;">Add Resources</a>
@endif
@if(count($res)>0)
<div>
    <table class="table">
        <tr>
            <th scope="col">Resource Name</th>
            <th scope="col">Resource Description</th>
            <th scope="col">Resource File</th>
            <th scope="col">Resource Operations</th>
        </tr>
        @foreach ($res as $re)
            <tr>
                <th scope="row">{{$re->resource_name}}</th>
                <td>{{$re->resources_desc}}</td>
                <td>
                    <a href="/ResourcesCourse/{{$re->resources_file_name}}">See File</a>
                </td>
                <td>
                    @if($course->id_teatcher == $idd)
                        <a href="{{route('Delete_Resources_Videos',['id'=>$re->resources_id ])}}" class="btn btn-danger">Delete Resource</a>
                    @else
                        <a href="" class="btn btn-secondary">None</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>
@else
<p>No Resources</p>
@endif

@endsection
