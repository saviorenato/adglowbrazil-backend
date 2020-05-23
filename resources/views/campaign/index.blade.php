@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Usuários</h2>

{{--        @can('user_add')--}}
            <a href="{{route('users.create')}}">Adicionar</a>
{{--        @endcan--}}
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
{{--                        @can('user_edit')--}}
                            <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-default">
                                Alterar
                            </a>
{{--                        @endcan--}}

{{--                        @can('user_destroy')--}}

                            {!! Form::open(
                                [
                                    'method'=>'DELETE',
                                    'url' => action('UsersController@destroy',[$user->id])
                                ]
                                ) !!}
                                <a onclick="javascript:$(this).closest('form').submit()" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir</a>
                            {!! Form::close() !!}
{{--                        @endcan--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
