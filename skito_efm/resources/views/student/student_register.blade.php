@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('Student_details_post') }}">
        @csrf
        <div class="form-group">
            <label for="student_years_experiance">{{ __('Your Agee') }}</label>
            <input type="number" class="form-control @error('student_age') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Age" name="student_age" value="{{ old('student_age') }}">
            @error('student_age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="student_years_experiance">{{ __('Your Agee') }}</label>
            <input type="number" class="form-control @error('student_years_experiance') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Age" name="student_years_experiance" value="{{ old('student_years_experiance') }}">
            @error('student_years_experiance')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="student_id" value="{{$user->id}}">


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
