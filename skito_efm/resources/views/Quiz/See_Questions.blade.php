@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('Add_Questions_Get',['id_qq'=>$id_q]) }}" class="btn btn-primary" style="margin: 20px;" >Add a new Questions</a>
        <div class="row">
            @forelse ($questions as $question )
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $question->question_text }}</h5>
                            <p class="card-text" style="color: green">{{ $question->question_right_ans }}</p>
                            <p class="card-text" style="color: red">{{ $question->question_wrong_ans_one }}</p>
                            <p class="card-text" style="color: red">{{ $question->question_wrong_ans_two }}</p>
                            <a href="{{ route('Delete_Question',['id_q'=>$question->question_id ]) }}" class="btn btn-danger">Delete Question</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No Questions</p>
            @endforelse
        </div>
    </div>
@endsection
