@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('Add_Quiz_Post') }}">
        @csrf
        <div class="form-group">
            <label>Quize Title</label>
            <input type="text" class="form-control @error('quiz_title') is-invalid @enderror"  placeholder="Enter Title Quize" name="quiz_title" value="{{ old('quiz_title') }}">
            @error('quiz_title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Quize Technology</label>
            <input type="text" class="form-control @error('quiz_technology') is-invalid @enderror"  placeholder="Enter Title Quize" name="quiz_technology" value="{{ old('quiz_technology') }}">
            @error('quiz_technology')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>




        <button type="submit" class="btn btn-primary">Add Quize</button>
    </form>
</div>
@endsection
