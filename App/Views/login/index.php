<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= BASE; ?>App/Assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASE; ?>App/Assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= BASE; ?>App/Assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE; ?>App/Assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= BASE; ?>App/Assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= BASE; ?>"><b>Simple</b>Finance</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Faca login para iniciar sua sessao!</p>

    <form action="<?= BASE; ?>login/signin" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Lembrar me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <a href="#">Esqueceu sua senha?</a><br>
    <a href="<?= BASE; ?>signup" class="text-center">Cadastrar-se</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= BASE; ?>App/Assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= BASE; ?>App/Assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= BASE; ?>App/Assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

<!-- <section class="container">
	<div class="row">  	
		<div class="col-lg-6 mx-auto py-5">
		 	<div class="my-5">	
	 			
	 		<? //if(!empty($msg)): ?>
	 			<div class="msg alert alert-warning" role="alert">
				    <strong id="msg"><?= $msg; ?></strong>
				</div>
		    <? //endif; ?>

			 	<form id="form" method="POST" data-controller="ajax/login" action="<?// BASE; ?>login/signin">
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
 			
			
</section> -->