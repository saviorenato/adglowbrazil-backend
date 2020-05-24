<div class="form-group">
    {!! Form::label('parent_id', 'Superior:') !!}
    {!! Form::select('parent_id', $users, isset($user)?$user->parent_id:null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('role_id', 'Tipo:') !!}
    {!! Form::select('role_id', $roles, isset($user)?$user->role_id:null , ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
</div>

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
