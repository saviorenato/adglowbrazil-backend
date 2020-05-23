@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Papeis</h2>

{{--        @can('role_add')--}}
            <a href="{{route('role.create')}}">Adicionar</a>
{{--        @endcan--}}
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>Nome</th>
                <th>Ação</th>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>
{{--                        @can('role_edit')--}}
                            <a href="{{ route('role.edit',[$role->id]) }}" class="btn btn-default">
                                Alterar
                            </a>
{{--                        @endcan--}}

{{--                        @can('role_destroy')--}}

                            {!! Form::open(
                                [
                                    'method'=>'DELETE',
                                    'url' => action('RoleController@destroy',[$role->id]),
                                    'style' => "display: inline;"
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
