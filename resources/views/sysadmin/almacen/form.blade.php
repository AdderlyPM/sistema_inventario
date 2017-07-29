<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}} col-md-12">
    <div class="toggle-switch">
        <label class="control-label">Estado:</label>
        <input id='toggle-switch1aHidden'  type='hidden' value='0' name='estado'>
        {!! Form::checkbox('estado', 1, true, ['id' => 'toggle-switch1a']) !!}
        <div class="toggle">
            <label for="toggle-switch1a"><i></i>
            </label>
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('descripcion', 'Descripción:', array('class' => 'control-label')) !!}
    {!! Form::text('descripcion',null,['class' => 'form-control', 'placeholder' => 'Descripción', 'required' => 'required']) !!}
    {!! $errors->first('descripcion', '<span class="help-block">:message</span>')!!}
</div>