@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criar Usuário</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {!! Form::open(['route'=>'user.store']) !!}
        @include('user._form')
        {!! Form::close() !!}

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


    </div>
@endsection
