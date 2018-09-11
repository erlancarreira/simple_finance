<div class="row">
    <div class="col-xs-12"> 
     <?php if (!empty($msg)): ?>
        <div class="col py-2">
            <div class="alert <?= (!empty($msg['success'])) ? 'alert-success': 'alert-danger'; ?> " role="alert">
                <?= (!empty($msg['success']) ) ? $msg['success'] : $msg['danger']; ?> <?= (!empty($clientId['id'])) ? $clientId['id']: ''; ?>       
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>  
            </div>
        </div>
    <?php endif;?>  
        <form action="<?= BASE; ?>client/add" method="POST">
            <!-- Input addon -->
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar Cliente </h3>
            </div>
            <div class="box-body">
              

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="clientName" placeholder="Nome do Cliente">
              </div>
               <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="clientEmail" placeholder="Email do Cliente">
              </div>
              <br>
              
              <button type="submit" class="btn-block btn btn-primary">Cadastrar</button>
              

             
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </form>
    </div>
</div> 