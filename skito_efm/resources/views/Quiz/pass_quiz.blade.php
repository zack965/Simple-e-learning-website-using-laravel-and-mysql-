@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="Questions">
            @if(!is_null($fq))
                <p>{{ $fq->question_id  }}</p>
                <p>{{ $fq->question_note  }}</p>
                <h1>Question is : {{ $fq->question_text }}</h1>
                <div class="QuestionsContainer">
                    <form action="{{ route('Answer') }}" method="post">
                        @csrf
                        <input type="radio" name="answer" onclick="fdisabled()" class="answer" value="{{ $fq->question_right_ans }}">
                        <label> R :{{ $fq->question_right_ans }}</label> <br>
                        <input type="radio" name="answer" onclick="fdisabled()" class="answer" value="{{ $fq->question_wrong_ans_one }}">
                        <label>{{ $fq->question_wrong_ans_one }}</label> <br>
                        <input type="radio" name="answer" onclick="fdisabled()" class="answer" value="{{ $fq->question_wrong_ans_two }}">
                        <label>{{ $fq->question_wrong_ans_two }}</label> <br>
                        <input type="hidden" name="question_id" value={{ $fq->question_id  }}>
                        <input type="submit" class="btn btn-primary" id="validate" value="Validate">
                    </form>

                </div>
                <script>
                    var validate = document.getElementById('validate');
                    validate.disabled = true;
                    function fdisabled(){
                        validate.disabled = false;
                    }
                </script>

            @else
                <p>No Questions</p>
            @endif
        </div>
    </div>
@endsection
