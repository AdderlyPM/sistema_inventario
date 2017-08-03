<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('descripcion', 'Descripción:', array('class' => 'control-label')) !!}
    {!! Form::text('descripcion',null,['class' => 'form-control', 'placeholder' => 'Descripción', 'required' => 'required']) !!}
    {!! $errors->first('descripcion', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group {{ $errors->has('auxiliary') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('auxiliary', 'Auxiliar:', array('class' => 'control-label')) !!}
    {!! Form::number('auxiliary',4,['class' => 'form-control', 'placeholder' => 'Existencia', 'required' => 'required']) !!}
    {!! $errors->first('auxiliary', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group {{ $errors->has('id_transacion') ? 'has-error' : ''}} col-md-12">
    {!! Form::label('id_transacion', 'Transación:', array('class' => 'control-label')) !!}
    <select id='id_transacion' name='id_transacion' class="name_search form-control">
        @foreach($transaciones as $item)
        <option value="{{$item->id}}">{{$item->id}}</option>
        @endforeach
    </select>
</div>