@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Resource</h1>
    <form action="{{route('Add_Resources_Videos_post')}}"method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Resource Name</label>
            <input type="text" class="form-control" name="resource_name" placeholder="Resource Name">
        </div>
        <div class="form-group">
            <label>Resource Descriptions</label>
            <input type="text" class="form-control" name="resources_desc" placeholder="Resource Descriptions">
        </div>

        <div class="form-group">
            <label>Resource </label>
            <input type="file" class="form-control-file" name="resources_file_name">
        </div>
        <input type="hidden" value="{{$id}}" name="video_id">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
