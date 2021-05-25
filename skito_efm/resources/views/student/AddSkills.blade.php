@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Add Skills</h1>
    <form method="post" action={{route('AddSkillsStudent_post')}}>
        @csrf
        <div class="form-group">
            <label for="technology_name" class="col-md-4 col-form-label text-md-right">{{ __('Technology Name') }}</label>

            <div class="col-md-6">
                <input id="technology_name" type="text" class="form-control @error('technology_name') is-invalid @enderror" name="technology_name" value="{{ old('technology_name') }}" required autocomplete="technology_name" autofocus>

                @error('technology_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label>Your Level</label>
                <select name="id_level" id="docNo" class="form-control" style="width:250px">

                    @foreach ($levels as $level)
                        <option value="{{$level->id_level}}">{{$level->libelle_level}}</option>
                    @endforeach
                </select>
                @error('id_level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label>Technology Domain</label>
                <select name="type_domaine_id" id="docNo" class="form-control" style="width:250px">

                    @foreach ($types as $type)
                        <option value="{{$type->id_type }}">{{$type->libelle_type}}</option>
                    @endforeach
                </select>
                @error('type_domaine_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label>Technology Domain Field</label>
                <select name="profile_id" id="docNo" class="form-control" style="width:250px">

                    @foreach ($portfolios as $portfolio)
                        <option value="{{$portfolio->profile_id }}">{{$portfolio->profile_libelle}}</option>
                    @endforeach
                </select>
                @error('profile_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection









