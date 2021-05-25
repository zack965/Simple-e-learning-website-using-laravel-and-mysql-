@extends('layouts.app')

@section('content')
<div class="container">
    <h1>hello student</h1>
    <a href="{{route('GetUserSkills',['id'=>$id])}}">Get Skills</a>
    <p>{{$id}}</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Desc</th>
                <th scope="col">Date of publication</th>
                <th scope="col">Opeerations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <th scope="row">{{$course->course_title}}</th>
                    <td>{{$course->course_description}}</td>
                    <td>{{$course->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Enroll Course</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
@endsection
