<div class="row">
    <div class="col-xs-12">
    <?php if (!empty($msg)): ?>
        
            <div class="alert <?= (!empty($msg['success'])) ? 'alert-success': 'alert-danger'; ?> " role="alert">
                <?= (!empty($msg['success']) ) ? $msg['success'] : $msg['danger']; ?>      
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>  
            </div>
        
    <?php endif;?>
    
    
    <form action="<?php echo BASE; ?>debit/create" method="POST">   

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar Debito</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                        <label for="clientId">Cliente</label>
                        <select name="clientId" id="clientId" class="form-control select2" <?= (!empty($client)) ? '' : ''; ?> >
                            <?php if(!empty($listClient)): ?>    
                                <?php for( $i = 0; $i < count($listClient); $i++): ?>      
                            <option value="<?= $listClient[$i]['id']; ?>"><?php echo ucwords($listClient[$i]['name']). ' - ' .$listClient[$i]['email']; ?></option>
                                <?php endfor; ?>

                            <?php else: ?>
                            
                            <option selected value="<?= $client['id']; ?>"><?php echo ucwords($client['name']). ' - ' .$client['email']; ?></option>
                        
                            <?php endif; ?>
                         
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="debitName">Descrição</label>
                            <!-- <span class="input-group-addon"><i class="fa fa-pencil"></i></span> -->
                            <input type="text" class="form-control" name="debitName" placeholder="Nome do debito">
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="pag_method">Forma de pagamento</label>
                                    <select class="form-control select2" name="pag_method" id="pag_method">
                                        <option value="0">Escolha...</option>
                                        <option value="1">Cartao</option>
                                        <option value="2">À vista</option>
                                        <option value="3">A prazo</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="col-xs-4">
                                <!-- Date -->
                                <div class="form-group">
                                    <label>Data:</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="date" name="date" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div> 
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control select2" name="status" id="status">
                                        <option value="0">Escolha...</option>
                                        <option value="1">Pago</option>
                                        <option value="3">Não pago</option>
                                        <option value="2">Pendente</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        
                        <div class="col-xs-6 m-0">
                            <div class="form-group">
                                <label for="value">Valor</label>
                                <div class="input-group">
                                    
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input type="text" name="value" class="form-control">
                                    <span class="input-group-addon">,00</span>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($total)): ?>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="total">Total de debitos</label>
                                <input value="<?=  number_format($total['value'], 2, ',', '.'); ?>" class="form-control p-2"  id="total"  disabled>
                            </div>
                        </div> 
                        <?php endif; ?>
                        </div>      

                        

                        <button type="submit" class="btn-block btn btn-primary">Cadastrar</button>
                                    
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
           
        </div>
          <!-- /.box -->
        </form> 
        <!-- /.form -->
    </div>
</div>
