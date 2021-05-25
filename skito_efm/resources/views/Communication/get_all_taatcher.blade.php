@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($teatchers as $teatcher)
                <div class="card col-lg-4">
                    <div class="card-body">
                        <h1>{{ $teatcher->name }}</h1> <br>
                        <a href="{{ route('Send_message_get',['id_s'=>$teatcher->id]) }}" class="btn btn-secondary">Send Message</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
