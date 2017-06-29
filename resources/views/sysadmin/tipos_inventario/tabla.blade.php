<!-- *** Editable Tables *** -->
<div class="panel panel-piluku">
  <div class="panel-heading">
    <h3 class="panel-title">
      Lista de los Tipos de Inventarios
      <span class="panel-options">
        <button type="button" class="btn btn-primary btn-radius" data-toggle="modal" data-target="#createmodal">
          Agregar Tipo de Inventario
        </button>
      </span>
    </h3>
  </div>


  <div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
          <h4 class="modal-title" id="myModalLabel">Agregar Tipo de Inventario</h4>
        </div>
        {!! Form::open(['route' => 'tipos_inventario_store_path', 'class' => 'form']) !!}
          <div class="modal-body">
              <div class="panel-body">
                  @include ('sysadmin/tipos_inventario.form')
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
            <th>Cuenta contable</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($tipos_inventarios as $tipos_inventario)
          <tr class="odd gradeX">
            <td>{{$tipos_inventario->descripcion}}</td>
            <td>
              @if($tipos_inventario->estado == 1)
              <button class="btn btn-success" type="button">
                Activo
              </button>
              @else
              <button class="btn btn-danger" type="button">
                Inactivo
              </button>
              @endif
            </td>
            <td>{{$tipos_inventario->cuenta_contable}}</td>
            <td>            
              {!! link_to_route('tipos_inventario_edit_path', '', [$tipos_inventario->slug], ['class'=>'btn btn-green ion ion-edit'])!!}
              <div class="modal fade delete-user-modal" id="{{$tipos_inventario->slug}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Eliminar Tipo Inventario</h4>
                    </div>
                    <div class="modal-body">
                      <p>¿Estás seguro que deseas elminar el tipos de inventario: <strong>{{$tipos_inventario->descripcion}}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      &nbsp;
                      {!! link_to_route('tipos_inventario_delete_path', 'Eliminar', [$tipos_inventario->slug], ['class'=>'btn btn-danger'])!!}                                        
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-red btn-icon-red ion ion-ios-trash-outline" href="#" data-toggle="modal" data-target="#{{$tipos_inventario->slug}}"></a>
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