@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('Teatcher_details_post') }}">
        @csrf
        <div class="form-group">
            <label for="age_teatcher">{{ __('Your Agee') }}</label>
            <input type="number" class="form-control @error('age_teatcher') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Age" name="age_teatcher" value="{{ old('age_teatcher') }}">
            @error('age_teatcher')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="teatcher_years_experiance">{{ __('Your Agee') }}</label>
            <input type="number" class="form-control @error('teatcher_years_experiance') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Age" name="teatcher_years_experiance" value="{{ old('teatcher_years_experiance') }}">
            @error('teatcher_years_experiance')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="id_teatcher" value="{{$user->id}}">


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
