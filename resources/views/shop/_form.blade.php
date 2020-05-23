<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('code', 'Código:') !!}
    {!! Form::text('code', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::text('type', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
