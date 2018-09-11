<!-- <div class="container">
    <div class="py-5">
        
        <form action="<?php echo BASE; ?>finance/create" method="POST">
            <div class="form-row">
            <h5 class="mx-auto">Cadastrar Debito</h5>
            <?php if (!empty($msg)): ?>
                <div class="msg alert alert-warning" role="alert">
                    <strong id="msg"><?=$msg;?></strong>
                </div>
            <?php endif;?>
                <div class="col-md-12 mb-3">
                    <label for="clientName">Nome completo do cliente</label>
                    <input type="text" class="form-control" name="clientName" id="clientName" placeholder="Cliente Name" required></td>             
                </div>

                <div class="col-md-4 mb-3">
                    <label for="productName">Nome do produto</label>
                    <input type="text" name="productName" class="form-control" id="productName" placeholder="Product Name" required>
                </div> 

                <div class="col-md-4 mb-3">
                    <label for="quantity">Quantidade</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Product quantity" required>
                </div> 
                
                <div class="col-md-4 mb-3">
                    <label for="price">Valor</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
                </div> 

                <div class="col-md-4 mb-3">
                    
                    <label class="t" for="pag_method">Forma de pagamento</label>
                    
                    <div class="input-group">
                        <select class="custom-select" name="pag_method" id="pag_method">
                            <option selected>Escolha...</option>
                            <option value="1">Cartao</option>
                            <option value="2">A vista</option>
                        </select>
                    </div>
                   
                </div> 

                <div class="col-md-4 mb-3">
                    <label for="date">Data do pedido</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Payment Date" required>
                </div> 

                <div class="col-md-4 mb-3">
                    
                    <label class="" for="status">Status</label>
                    
                    <div class="input-group">
                        <select class="custom-select" name="status" id="status">
                            <option selected>Escolha...</option>
                            <option value="1">Pago</option>
                            <option value="0">Nao pago</option>
                            <option value="2">Pendente</option>
                        </select>
                    </div>
                   
                </div>       
      
                <div class="col">
                    <button type="submit" class="btn btn-sm btn-primary" role="button">Adicionar debito</a>
                </div>
            </div>    
        </form>        
        
    </div> 
</div> -->