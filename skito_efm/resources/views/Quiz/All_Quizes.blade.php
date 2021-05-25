@extends('layouts.app')

@section('content')

<div class="container">
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
                        <a href="{{ route('See_Questions',['id_q'=>$quize->quiz_id ]) }}" class="btn btn-primary"> Enroll Coursrs</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
