<section class="container">
	<div class="row">  	
		<div class="col-lg-6 mx-auto py-5">
		 	<div class="my-5">	
	 			
	 		<?php if(!empty($msg)): ?>
	 			<div class="msg alert alert-warning" role="alert">
				    <strong id="msg"><?= $msg; ?></strong>
				</div>
		    <?php endif; ?>

			 	<form id="form" method="POST" data-controller="ajax/login" action="<?= BASE; ?>login/signin">
				  <div class="form-group">
				    <label for="username-email">Email or Username</label>
				    <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text "><i class="fa fa-user" aria-hidden="true"></i></div>
				        </div>
				        <input type="text" name="email" class="form-control" id="username-email" aria-describedby="emailHelp" placeholder="Enter email">
				    </div>    
				    
				  </div>
				  <div class="form-group">
				    <label for="user-pass">Password</label>
				    <div class="input-group mb-2">
				        <div class="input-group-prepend">
				          <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
				        </div>
				        <input type="password" id="user-pass" name="password" class="form-control" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				  <button class="btn btn-primary submit">Submit <i class="fa"></i></button>
			    </form>
		    </div>
	    </div>
    </div>
 			
			
</section>