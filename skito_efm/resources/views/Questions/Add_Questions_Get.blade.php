@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('Add_Questions_Post') }}">
        @csrf
        <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control @error('question_text') is-invalid @enderror"  placeholder="Enter Title Quize" name="question_text" value="{{ old('question_text') }}">
            @error('question_text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Right Answer</label>
            <input type="text" class="form-control @error('question_right_ans') is-invalid @enderror"  placeholder="Enter Title Quize" name="question_right_ans" value="{{ old('question_right_ans') }}">
            @error('question_right_ans')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Wrong Answer 01</label>
            <input type="text" class="form-control @error('question_wrong_ans_one') is-invalid @enderror"  placeholder="Enter Title Quize" name="question_wrong_ans_one" value="{{ old('question_wrong_ans_one') }}">
            @error('question_wrong_ans_one')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Wrong Answer 02</label>
            <input type="text" class="form-control @error('question_wrong_ans_two') is-invalid @enderror"  placeholder="Enter Title Quize" name="question_wrong_ans_two" value="{{ old('question_wrong_ans_two') }}">
            @error('question_wrong_ans_two')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <input type="hidden" name="question_quiz" value="{{ $id_qq }}">
        <button type="submit" class="btn btn-primary">Add Question</button>
    </form>
</div>
@endsection
