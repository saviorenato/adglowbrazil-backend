@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Alterar Loja: <b>{{$shop->name}}</b></h2>
        {!! Form::model($user, ['route'=>['shop.update', $user->id], 'method'=>'put']) !!}
        @include('shop._form')
        {!! Form::close() !!}
    </div>
@endsection
