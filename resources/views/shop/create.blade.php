@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criar Loja</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {!! Form::open(['route'=>'role.store']) !!}
        @include('role._form')
        {!! Form::close() !!}

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


    </div>
@endsection
