<!-- EDITAR INICIO-->
<div class="modal fade" id="modal-warning">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title skin-black">Editar cliente</h4>
      </div>
      <div class="modal-body">

        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input id="editName" type="text" value="" name="name" class="form-control" placeholder="Nome">
        </div>
        <br>

        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input value="" id="editEmail" type="email" name="email" class="form-control" placeholder="Email">
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" id="meuInput">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
