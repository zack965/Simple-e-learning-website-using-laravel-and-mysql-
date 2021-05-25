@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('Send_message_post') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Test</label>
            <textarea name="message_text" class="form-control @error('message_text') is-invalid @enderror" id="" cols="30" rows="10" value="{{ old('message_text') }}"></textarea>
            @error('message_text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="id_receiver" value="{{ $id_s }}">
        <input type="submit" value="Send Message" class="btn btn-primary">
    </form>
</div>
@endsection
