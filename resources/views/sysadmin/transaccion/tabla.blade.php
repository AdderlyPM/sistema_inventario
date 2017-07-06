<!-- *** Editable Tables *** -->
<div class="panel panel-piluku">
  <div class="panel-heading">
    <h3 class="panel-title">
      Lista de Transacciones
      <span class="panel-options">
        <button type="button" class="btn btn-primary btn-radius" data-toggle="modal" data-target="#createmodal">
          Agregar Transacción
        </button>
      </span>
    </h3>
  </div>

  <div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
          <h4 class="modal-title" id="myModalLabel">Agregar Transacción</h4>
        </div>
        {!! Form::open(['route' => 'transaccion_store_path', 'class' => 'form']) !!}
          <div class="modal-body">
              <div class="panel-body">
                  @include ('sysadmin/transaccion.form')
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

  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped display" id="example">
        <thead>
          <tr>
            <th>Tipo Transacción</th>
            <th>Artículo</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Monto</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($transacciones as $transaccion)
          <tr class="odd gradeX">
            <td>{{ucwords($transaccion->tipo_transaccion)}}</td>
            <td>{{\App\Articulo::where('id',$transaccion->id_articulo)->first()->descripcion}}</td>
            <td>{{$transaccion->fecha}}</td>
            <td>{{$transaccion->cantidad}}</td>
            <td>{{$transaccion->monto}}</td>
            <td>
              {!! link_to_route('transaccion_edit_path', '', [$transaccion->id], ['class'=>'btn btn-green ion ion-edit'])!!}
              <div class="modal fade delete-user-modal" id="{{$transaccion->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Eliminar Transacción</h4>
                    </div>
                    <div class="modal-body">
                      <p>¿Estás seguro que deseas elminar esta transacción ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      &nbsp;
                      {!! link_to_route('transaccion_delete_path', 'Eliminar', [$transaccion->id], ['class'=>'btn btn-danger'])!!}
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-red btn-icon-red ion ion-ios-trash-outline" href="#" data-toggle="modal" data-target="#{{$transaccion->id}}"></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /panel -->
@section('js')
  <script src='/assets/js/jquery.dataTables.min.js'></script>
  <script src='/assets/js/bootstrap-datatables.js'></script>
  <script src='/assets/js/dataTables-custom.js'></script>
  <script src='/assets/js/mindmup-editabletable.js'></script>
  <script src='/assets/js/numeric-input-example.js'></script>
  <script src='/assets/js/dynamic-tables.js'></script>
@endsection