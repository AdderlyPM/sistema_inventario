@extends('layouts.app')

@section('content')
	@if (session('status'))
		<div class="alert alert-success">
	    	{{ session('status') }}
		</div>
	@endif
	<div class="panel-body">
	{!! Form::open(['route' => 'tipos_inventario_store_path', 'class' => 'form']) !!}
		@include ('sysadmin/tipos_inventario.tabla')
	{!! Form::close() !!}
	</div>
@endsection

@section('js')
	<script src='/assets/js/select2.js'></script>
	<script type="text/javascript" src="/assets/js/tinymce/tinymce.min.js"></script>
@endsection