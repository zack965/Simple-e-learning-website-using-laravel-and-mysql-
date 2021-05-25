@extends('layouts.app')

@section('content')
<div class="container">

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

            </div>
        </div>
         @endforeach
    </div>

</div>
@endsection
