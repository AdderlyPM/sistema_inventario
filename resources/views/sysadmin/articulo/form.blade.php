<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}} col-md-12">
    <div class="toggle-switch">
        <label class="control-label">Estado:</label>
        <input id='toggle-switch1aHidden'  type='hidden' value='0' name='estado'>
        {!! Form::checkbox('estado', 1, null, ['id' => 'toggle-switch1a5']) !!}
        <div class="toggle">
            <label for="toggle-switch1a5"><i></i>
            </label>
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('descripcion', 'Descripción:', array('class' => 'control-label')) !!}
    {!! Form::text('descripcion',null,['class' => 'form-control', 'placeholder' => 'Descripción', 'required' => 'required']) !!}
    {!! $errors->first('descripcion', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group {{ $errors->has('existencia') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('existencia', 'Existencia:', array('class' => 'control-label')) !!}
    {!! Form::number('existencia',null,['class' => 'form-control', 'placeholder' => 'Existencia', 'required' => 'required']) !!}
    {!! $errors->first('existencia', '<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{ $errors->has('id_tipo_inventario') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('id_tipo_inventario', 'Tipo de inventario:', array('class' => 'control-label')) !!}
    <select id='id_tipo_inventario' name='id_tipo_inventario' class="name_search form-control">
        @foreach($tipos_inventarios as $item)
        <option value="{{$item->id}}" @if(!isset($uri)) {{ isset($articulo) && $articulo->id_tipo_inventario == $item->id ? 'selected' : ''}} @endif>{{$item->descripcion}}</option>
        @endforeach
    </select>
</div>

<div class="form-group {{ $errors->has('costo_unitario') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('costo_unitario', 'Costo Unitario:', array('class' => 'control-label')) !!}
    {!! Form::number('costo_unitario',null,['class' => 'form-control', 'placeholder' => 'Costo Unitario', 'required' => 'required']) !!}
    {!! $errors->first('costo_unitario', '<span class="help-block">:message</span>')!!}
</div>
