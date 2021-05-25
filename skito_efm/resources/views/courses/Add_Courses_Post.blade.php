@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Course</h1>
    <form action="{{route('Add_Courses_Post')}}"method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Course Title</label>
            <input type="text" class="form-control" name="course_title" placeholder="Course Title">
        </div>
        <div class="form-group">
          <label>Course Description</label>
          <input type="text" class="form-control" name="course_description" placeholder="Course Description">
        </div>
        <div class="form-group">
            <label>Course Thumnail</label>
            <input type="file" class="form-control-file" name="course_thumnail">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
