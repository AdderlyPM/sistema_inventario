<div class="form-group {{ $errors->has('tipo_transaccion') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('tipo_transaccion', 'Tipo de Transacción:', array('class' => 'control-label')) !!}
    <select id='tipo_transaccion' name='tipo_transaccion' class="name_search form-control">
        <option value="entrada" {{ isset($transaccion) && $transaccion->tipo_transaccion == 'entrada' ? 'selected' : ''}}>Entrada</option>
        <option value="salida" {{ isset($transaccion) && $transaccion->tipo_transaccion == 'salida' ? 'selected' : ''}}>Salida</option>
        <option value="traslado" {{ isset($transaccion) && $transaccion->tipo_transaccion == 'traslado' ? 'selected' : ''}}>Traslado</option>
        <option value="ajuste" {{ isset($transaccion) && $transaccion->tipo_transaccion == 'ajuste' ? 'selected' : ''}}>Ajuste</option>
    </select>
</div>

<div class="form-group {{ $errors->has('id_articulo') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('id_articulo', 'Artículo:', array('class' => 'control-label')) !!}
    <select id='id_articulo' name='id_articulo' class="name_search form-control">
        @foreach($articulo as $item)
        <option value="{{$item->id}}" {{ isset($transaccion) && $item->id == $transaccion->id_articulo ? 'selected' : '' }}>{{$item->descripcion}}</option>
        @endforeach
    </select>
</div>

<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('fecha', 'Fecha:', array('class' => 'control-label')) !!}
    {!! Form::text('fecha',null,['class' => 'form-control', 'placeholder' => 'Fecha', 'required' => 'required']) !!}
    {!! $errors->first('fecha', '<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('cantidad', 'Cantidad:', array('class' => 'control-label')) !!}
    {!! Form::number('cantidad',null,['class' => 'form-control', 'placeholder' => 'Cantidad', 'required' => 'required']) !!}
    {!! $errors->first('cantidad', '<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('monto') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('monto', 'Monto:', array('class' => 'control-label')) !!}
    {!! Form::number('monto',null,['class' => 'form-control', 'placeholder' => 'Monto', 'required' => 'required']) !!}
    {!! $errors->first('monto', '<span class="help-block">:message</span>')!!}
</div>