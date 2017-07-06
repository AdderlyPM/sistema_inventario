@extends('layouts.app')

@section('content')

	@if (session('status'))
		<div class="alert alert-success">
	    	{{ session('status') }}
		</div>
	@endif
	<div class="panel-body">
		<div class="panel panel-piluku">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		      Editar Artículo
		      <span class="panel-options">
		      </span>
		    </h3>
		  </div>

		{!! Form::model($articulo, ['route' => ['articulo_update_path', $articulo->id], 'method' => 'PATCH', 'class' => 'form']) !!}
			@include ('sysadmin/articulo.form')
	    
			<div class="panel-body">
			  <div class="form-group">
					<button type="submit" class="btn btn-primary">Actualizar</button>
			  </div>
			</div>
		
		{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('js')
	<script src='/assets/js/select2.js'></script>
	<script type="text/javascript" src="/assets/js/tinymce/tinymce.min.js"></script>
@endsection