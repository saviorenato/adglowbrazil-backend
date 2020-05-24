<div class="form-group">
    {!! Form::label('name', 'Nome na plataforma:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type_business', 'Tipo') !!}
    {!! Form::select('type_business', ['Administrator' => 'Administrator', 'Coordinator' => 'Coordinator'], null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
