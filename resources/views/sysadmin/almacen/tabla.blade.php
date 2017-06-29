<!-- *** Editable Tables *** -->
<div class="panel panel-piluku">
  <div class="panel-heading">
    <h3 class="panel-title">
      Lista de Almacenes
      <span class="panel-options">
        <button type="button" class="btn btn-primary btn-radius" data-toggle="modal" data-target="#createmodal">
          Agregar Almacén
        </button>
      </span>
    </h3>
  </div>


  <div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped display" id="example">
        <thead>
          <tr>
            <th>Descripción</th>
            <th>Estado</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($almacenes as $almacen)
          <tr class="odd gradeX">
            <td>{{$almacen->descripcion}}</td>
            <td>
              @if($almacen->estado == 1)
              <button class="btn btn-success" type="button">
                Activo
              </button>
              @else
              <button class="btn btn-danger" type="button">
                Inactivo
              </button>
              @endif
            </td>
            <td>            
              {!! link_to_route('almacen_edit_path', '', [$almacen->slug], ['class'=>'btn btn-green ion ion-edit'])!!}
              <div class="modal fade delete-user-modal" id="{{$almacen->slug}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Eliminar Almacén</h4>
                    </div>
                    <div class="modal-body">
                      <p>¿Estás seguro que deseas elminar el almacen: <strong>{{$almacen->descripcion}}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      &nbsp;
                      {!! link_to_route('almacen_delete_path', 'Eliminar', [$almacen->slug], ['class'=>'btn btn-danger'])!!}                                        
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-red btn-icon-red ion ion-ios-trash-outline" href="#" data-toggle="modal" data-target="#{{$almacen->slug}}"></a>
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