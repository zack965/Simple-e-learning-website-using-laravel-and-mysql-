@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ route('Add_Quiz_Get') }}" class="btn btn-primary" style="margin: 10px;">Add Quizes</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Quiz Title</th>
            <th scope="col">Quiz Technology</th>
            <th scope="col">Quiz Operations</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($quizes as $quize )
                <tr>
                    <th scope="row">{{ $quize->quiz_title }}</th>
                    <td>{{ $quize->quiz_technology }}</td>
                    <td>
                        <a href="{{ route('Delete_Quiz',['quiz_id'=>$quize->quiz_id ]) }}" class="btn btn-danger">Delete Quize</a>
                        <a href="{{ route('See_Questions_teatcher',['id_q'=>$quize->quiz_id ]) }}" class="btn btn-primary">See Questions</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
