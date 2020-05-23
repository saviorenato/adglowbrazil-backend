@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Alterar Papel: <b>{{$role->name}}</b></h2>
        {!! Form::model($role, ['route'=>['role.update', $role->id], 'method'=>'put']) !!}
        @include('role._form')
        {!! Form::close() !!}
    </div>
@endsection
