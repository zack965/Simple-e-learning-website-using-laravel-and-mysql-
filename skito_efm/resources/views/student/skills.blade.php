@extends('layouts.app')

@section('content')
<div class="container">
    <h1>hello</h1>

    <a href="{{route('AddSkill_Get')}}" class="btn btn-primary">Add Skill</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Technology</th>
                <th scope="col">Level</th>
                <th scope="col">Domaine Name</th>
                <th scope="col">Profile</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_space as $student_spac)
                <tr>
                    <th scope="row">{{$student_spac->technology_name}}</th>
                    <td>{{$student_spac->libelle_level }}</td>
                    <td>{{$student_spac->profile_libelle}}</td>
                    <td>{{$student_spac->libelle_type}}</td>
                    <td>
                        <a class="btn btn-danger" href="{{route('DeleteSkill',['id_skill'=>$student_spac->id_skill])}}">Delete</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
@endsection
