@extends('layouts.app')

@section('content')
<div class="container">
    <h1>hello Teatcher</h1>
    <a href="{{route('GetUserSkills',['id'=>$id])}}" class="btn btn-primary">Get Skills</a>

    <a href="{{route('Add_Courses_Get')}}" class="btn btn-primary" style="margin-left:30px;">Add Course</a>
    <br>
    <br>
    <div class="row">
        @foreach ($courses as $course)
        <div class="card" style="width: 18rem;">
            <img src="/uploads/{{ $course->course_thumnail }}" alt="none" height="215"/>
            <div class="card-body">
                <h5 class="card-title">{{ $course->course_title }}</h5>
                <p class="card-text">{{$course->course_description}}</p>
                <p>{{$course->created_at->diffForHumans()}}</p>
                <a href="{{route('GetVideosOfCourse',['id'=>$course->course_id])}}" class="btn btn-primary">Enroll Course</a>
                <a href="{{route('DeleteCourse',['id'=>$course->course_id])}}" class="btn btn-danger">Delete Course</a>
            </div>
        </div>
         @endforeach
    </div>

</div>
@endsection
