@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Course</h1>
    <form action="{{route('Add_Video_post')}}"method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Video Title</label>
            <input type="text" class="form-control" name="title_video" placeholder="Video Title">
        </div>

        <div class="form-group">
            <label>Video </label>
            <input type="file" class="form-control-file" name="video_path">
        </div>
        <input type="hidden" value="{{$id}}" name="course_id">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
