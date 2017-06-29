<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('descripcion', 'Descripción:', array('class' => 'control-label')) !!}
    {!! Form::text('descripcion',null,['class' => 'form-control', 'placeholder' => 'Descripción', 'required' => 'required']) !!}
    {!! $errors->first('descripcion', '<span class="help-block">:message</span>')!!}
</div>

Select

<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('fecha', 'Fecha:', array('class' => 'control-label')) !!}
    {!! Form::text('fecha',null,['class' => 'form-control', 'placeholder' => 'Fecha', 'required' => 'required']) !!}
    {!! $errors->first('fecha', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('cantidad', 'Descripción:', array('class' => 'control-label')) !!}
    {!! Form::text('cantidad',null,['class' => 'form-control', 'placeholder' => 'Descripción', 'required' => 'required']) !!}
    {!! $errors->first('cantidad', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group {{ $errors->has('monto') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('monto', 'Monto:', array('class' => 'control-label')) !!}
    {!! Form::text('monto',null,['class' => 'form-control', 'placeholder' => 'Monto', 'required' => 'required']) !!}
    {!! $errors->first('monto', '<span class="help-block">:message</span>')!!}
</div>