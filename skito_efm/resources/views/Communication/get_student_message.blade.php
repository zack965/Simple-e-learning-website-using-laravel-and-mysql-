@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($messages as $message)
                <div class="card col-lg-4">
                    <div class="card-body">
                        <h1>{{ $message->name }}</h1> <br>
                        <p>{{ $message->message_text }}</p>
                        <p>{{ $message->message_response }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
