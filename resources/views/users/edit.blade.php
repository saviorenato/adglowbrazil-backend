@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Alterar Usuário: <b>{{$user->name}}</b></h2>
        {!! Form::model($user, ['route'=>['users.update', $user->id], 'method'=>'put']) !!}
        @include('users._form')
        {!! Form::close() !!}
    </div>
@endsection
