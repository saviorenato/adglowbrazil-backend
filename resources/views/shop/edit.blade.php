@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Alterar Loja: <b>{{$shop->name}}</b></h2>
        {!! Form::model($shop, ['route'=>['shop.update', $shop->id], 'method'=>'put']) !!}
        @include('shop._form')
        {!! Form::close() !!}
    </div>
@endsection
