@extends('layouts.app')

@section('content')
<div class="row">
    <div class="info-logo-content">
        <ul class="list-inline list-unstyled">
            <li><i class="ti-star primary-info"></i></li>
            <li>¡HOLA! {{Auth::user()->name}}<p>¿Qué haremos hoy?</p></li>
        </ul>
    </div>
</div>

<!-- Modal -->

  <div class="modal fade" id="createmodalAlmacen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
          <h4 class="modal-title" id="myModalLabel">Agregar Almacén</h4>
        </div>
        {!! Form::open(['route' => 'almacen_store_path', 'class' => 'form']) !!}
          <div class="modal-body">
              <div class="panel-body">
                  @include ('sysadmin/almacen.form')
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <div class="modal fade" id="createmodalArticulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
          <h4 class="modal-title" id="myModalLabel">Agregar Artículo</h4>
        </div>
        {!! Form::open(['route' => 'articulo_store_path', 'class' => 'form']) !!}
          <div class="modal-body">
              <div class="panel-body">
                  @include ('sysadmin/articulo.form')
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
<!-- Modal -->

<div class="panel panel-piluku col-md-6 col-xs-6 col-sm-6 ">
    <div class="panel-heading">
        <h3 class="panel-title">Acciones Rápidas
            <span class="panel-options">
                <a href="#" class="panel-refresh">
                    <i class="icon ti-reload"></i>
                </a>
                <a href="#" class="panel-minimize">
                    <i class="icon ti-angle-up"></i>
                </a>
                <!-- <a href="#" class="panel-close">
                    <i class="icon ti-close"></i>
                </a> -->
            </span>
        </h3>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6 ">
                <a data-toggle="modal" data-target="#createmodalAlmacen">
                    <div class="info-five primarybg-info">
                        <div class="logo"><i class="ti-pencil-alt"></i></div>
                        Agregar Almacén
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xs-6 col-sm-6 ">
                <a data-toggle="modal" data-target="#createmodalArticulo">
                    <div class="info-five primarybg-info">
                        <div class="logo"><i class="ti-blackboard"></i></div>
                        Agregar Artículo
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
