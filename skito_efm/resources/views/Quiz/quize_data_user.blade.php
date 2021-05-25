@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Quiz Title</th>
            <th scope="col">Quiz Rating</th>
            <th scope="col">Quiz Operations</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($quistd as $quist )
                <tr>
                    <th scope="row">{{ $quist->quiz_title }}</th>
                    <td>{{ $quist->Rating }}</td>
                    <td>
                        <a href="{{ route('delete_quize_data_user',['id_ud'=>$quist->id_user_quize ]) }}" class="btn btn-danger"> Enroll Coursrs</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
