@extends('layouts.app')

@section('content')
<link href="{{ asset('css/AccessDenied.css') }}" rel="stylesheet">
    <div class="container">
        <div class="alert alert-danger" role="alert">
            <h1>Access Denied</h1>
            <p>Sorry you can't pass this exam more than once</p>
        </div>

    </div>

@endsection
