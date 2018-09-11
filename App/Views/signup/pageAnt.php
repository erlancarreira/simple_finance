<section class="container">
	<div class="row">
	 	<div class="col-lg-6 mx-auto py-5">
		 	<div class="my-5">
                <?php if (!empty($msg)): ?>
                	<div class="msg alert alert-warning" role="alert">
				    <strong id="msg"><?= $msg; ?></strong>
				</div>
                <?php endif ?>
		 		
			 	<form method="POST" action="<?= BASE; ?>login/signup">
				  <div class="form-group">
				    <label for="exampleInputEmail10">Username</label>
				    <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
				        </div>
				        <input type="text" name="username" class="form-control" id="exampleInputEmail10" aria-describedby="emailHelp" placeholder="Enter your username">
				    </div>    
				    
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
				        </div>
				        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
				    </div>    
				    
				  </div>


				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
				        </div>
				        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				    </div>
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Register</button>
			    </form>
		    </div>
	    </div>
    </div>
 			
			
</section>