<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Senha:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
