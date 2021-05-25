@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('Send_Answer_Post') }}" method="post">
        @csrf
        <p>{{ $message->message_text }}</p>
        <div class="form-group">
            <textarea name="message_text" class="form-control @error('message_text') is-invalid @enderror" id="" cols="30" rows="10" value="{{ old('message_text') }}"></textarea>
            @error('message_text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="id_mess" value="{{ $message->id_message  }}">
        <input type="submit" value="Send Message" class="btn btn-primary">
    </form>
</div>
@endsection
