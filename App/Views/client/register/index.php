<div class="container">
    <div class="py-5">
        <div> 
            <h5 class="mx-auto">Cadastrar Cliente</h5>
        </div>
        <form action="<?php echo BASE; ?>finance/create" method="POST">
            <div class="form-row">
           
            <?php if (!empty($msg)): ?>
                <div class="msg alert alert-warning" role="alert">
                    <strong id="msg"><?=$msg;?></strong>
                </div>
            <?php endif;?>
                <div class="col-md-12 mb-3">
                    <label for="clientName">Nome completo do cliente</label>
                    <input type="text" class="form-control" name="clientName" id="clientName" placeholder="Cliente Name" required></td>             
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-sm btn-primary" role="button">Adicionar debito</a>
                </div>
            </div>    
        </form>        
        
    </div> 
</div>

