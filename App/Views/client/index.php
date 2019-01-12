<div class="row">
  <div class="col-xs-12">
    <div class="alert " role="alert" id="msg">     
        <button type="button" class="fa close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>  
    </div>
  </div>
</div>
<div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Clientes cadastrados</h3>
    </div>
    <form method="POST" class="rtw-form" id="form">
    
    <?php if(!empty($list)): ?> 
    <!-- /.box-header -->
    <div class="box-body" >
        <table id="tableData" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>NOME</th>
              <th>EMAIL</th>
              <th>ACOES</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($list as $value): ?> 
            <tr> 
              <th><?= $value['id']; ?></th>              
              <td data-name="<?= $value['name']; ?>"><?= $value['name']; ?></td>
              
              <input type="hidden" name="name" value="<?= $value['name']; ?>">
              
              <td data-email="<?= $value['email']; ?>"><?= $value['email']; ?></td>    
              <input type="hidden" name="email" value="<?= $value['email']; ?>">  
              <td id="subActions">
                <button type="submit" value="<?= $value['id']; ?>" id="verDebito" class="client btn-sm btn btn-primary" >Ver</button>
                <!-- <a href=" BASE; " class=" m-2">Ver</a>  -->  
                <button id="input1" value="<?= $value['id']; ?>" type="button" class="client btn-sm btn btn-warning"  data-toggle="modal" data-target="#modal-warning" data-edit="<?= $value['id']; ?>">
                Editar
                </button>
                <button id="input2" value="<?= $value['id']; ?>" type="button" class="client btn-sm btn btn-danger" data-toggle="modal" data-target="#modal-danger" data-delete="<?= $value['id']; ?>">
                Excluir
                </button>
              </td>     
            </tr>
            <?php endforeach; ?> 
            </tbody>
            
        </table>
    </div>
    <!-- /.box-body -->
    <?php $this->loadView('client/edit/index', $this->getData()); ?>
    <?php $this->loadView('client/delete/index', $this->getData()); ?>

    <?php else: ?>
              
    <div class="box-body">
      <div class="box-title">  
        <h3>Você ainda não tem nenhum cliente cadastrado!</h3>
      </div>
    </div>
    
    <?php endif; ?>


    </form>
</div>
<!-- /.box -->
    
