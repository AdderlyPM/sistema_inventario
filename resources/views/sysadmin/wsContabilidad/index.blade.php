@extends('layouts.app')
@section('content')

	@if (session('status'))
		<div class="alert alert-success">
	    	{{ session('status') }}
		</div>
	@endif
<!-- *** Editable Tables *** -->
<div class="panel panel-piluku">
  <div class="panel-heading">
    <h3 class="panel-title">
      Asiento Contable
      <span class="panel-options">
        
      </span>
    </h3>
  </div>

	<div class="panel-body">
	{!! Form::open(['route' => 'asiento_store_path', 'class' => 'form']) !!}
		<div class="modal-body">
              <div class="panel-body">
                  @include ('sysadmin/wsContabilidad.form')
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
	{!! Form::close() !!}
	</div>	
</div>
@endsection

@section('js')
	<script src='/assets/js/select2.js'></script>
	<script src="/assets/js/tinymce/tinymce.min.js"></script>
@endsection