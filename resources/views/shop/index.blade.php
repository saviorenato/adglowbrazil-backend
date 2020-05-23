@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lojas</h2>

{{--        @can('shop_add')--}}
            <a href="{{route('shop.create')}}">Adicionar</a>
{{--        @endcan--}}
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>Nome</th>
                <th>Ação</th>
            </thead>
            <tbody>
            @foreach($shops as $shop)
                <tr>
                    <td>{{$shop->name}}</td>
                    <td>
{{--                        @can('shop_edit')--}}
                            <a href="{{ route('shop.edit',[$shop->id]) }}" class="btn btn-default">
                                Alterar
                            </a>
{{--                        @endcan--}}

{{--                        @can('shop_destroy')--}}

                            {!! Form::open(
                                [
                                    'method'=>'DELETE',
                                    'url' => action('ShopController@destroy',[$shop->id])
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
