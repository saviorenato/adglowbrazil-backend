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

<div class="form-group">
    {!! Form::label('owner', 'Owner:') !!}
    {!! Form::text('owner', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('gerencia_de_mercado', 'Gerencia_de_Mercado:') !!}
    {!! Form::text('gerencia_de_mercado', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('consultor', 'Consultor:') !!}
    {!! Form::text('consultor', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('gerente_mkt', 'Gerente_MKT:') !!}
    {!! Form::text('gerente_mkt', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('coordenador_mkt', 'Coordenador_MKT:') !!}
    {!! Form::text('coordenador_mkt', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('asistente_mkt', 'Asistente_MKT:') !!}
    {!! Form::text('asistente_mkt', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('quadrante_de_performance', 'Quadrante_de_Performance:') !!}
    {!! Form::text('quadrante_de_performance', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('latitud', 'Latitud:') !!}
    {!! Form::text('latitud', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('longitud', 'Longitud:') !!}
    {!! Form::text('longitud', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', ['active' => 'Active', 'inactive' => 'Inactive'], null, ['class'=>'form-control','Placeholder'=>'Select...']) !!}
</div>

<div class="form-group">
    {!! Form::label('enabled', 'Enabled?') !!}
    {!! Form::select('enabled', ['1' => 'Yes', '0' => 'No'], null, ['class'=>'form-control','Placeholder'=>'Select...']) !!}
</div>

{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
