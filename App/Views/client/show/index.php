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
              <th data-id="<?= $value['id']; ?>"><?= $value['id']; ?></th>              
              <td data-name="<?= $value['name']; ?>"><?= $value['name']; ?></td>
              
              <input type="hidden" name="name" value="<?= $value['name']; ?>">
              
              <td data-email="<?= $value['email']; ?>"><?= $value['email']; ?></td>    
              <input type="hidden" name="email" value="<?= $value['email']; ?>">  
              <td>
                <a href="<?= BASE; ?>" class="btn-sm btn btn-primary m-2">Ver</a>   
                <button type="button" class="btn-sm btn btn-warning" id="input1" data-toggle="modal" onclick="pegarId(<?= $value['id']; ?>)" data-target="#modal-warning">
                Editar
                </button>
                <button type="button" id="input2" class="btn-sm btn btn-danger" onclick="pegarId(<?= $value['id']; ?>)" data-toggle="modal" data-target="#modal-danger">
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
    </form>
</div>
<!-- /.box -->
    
