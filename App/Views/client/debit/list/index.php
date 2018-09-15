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
      <h3 class="box-title">Debitos cadastrados</h3>
    </div>
    <form method="POST" class="rtw-form" id="form">
    
    <?php if(!empty($debitList)): ?> 
    <!-- /.box-header -->
    <div class="box-body" >
        <table id="dataTable" class="table table-bordered table-striped" style="width:100%">
            <thead>
            <tr>
              <th class="sorting">ID</th>
              <th>CLIENTE</th>
              <th>DESCRICAO</th>
              <th>PAG</th>
              <th>DATA</th>
              <th>STATUS</th>
              <th>VALOR</th>
              <th>ACOES</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($debitList as $value): ?> 
            <tr> 
              <th><?= $value['clientId']; ?></th> 
              <td><?= $value['name']; ?></td>  
              <td><?= $value['description']; ?></td>     
              <td><?= $this->getPayment($value['payment_method']); ?></td>
              <td><?= $this->formatDate($value['date']); ?></td>
              <td><span id="status" class="status label"><?= $this->getStatus($value['status']); ?></span></td>
              <td><?= number_format($value['value'],2,",","."); ?></td>
             
              <td>
                <a href="<?= BASE; ?>" class="btn-xs btn-sm btn btn-primary m-2">Ver</a>   
                <button type="button" class="btn-xs btn-sm btn btn-warning" id="input1" data-toggle="modal" onclick="pegarId(<?= $value['clientId']; ?>, <?= $value['debitId']; ?>)" data-target="#modal-warning">
                Editar
                </button>
                <button type="button" id="input2" class="btn-xs btn-sm btn btn-danger" onclick="pegarId(<?= $value['clientId']; ?>, <?= $value['debitId']; ?>)" data-toggle="modal" data-target="#modal-danger">
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
        <h3>Este cliente ainda nao tem nenhum debito cadastrado!</h3>
      </div>
    </div>
    
    <?php endif; ?>


    </form>
</div>
<!-- /.box -->
    
