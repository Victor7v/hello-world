<!DOCTYPE html>
<!-- Hola mundo .. borrar cuando lo vea. -->
<html lang="ES">

	<head>
		<meta charset="utf-8">
   	<title>Primera Página</title>
  	 	<meta name="description" content="The HTML5 Herald">
  		<meta name="author" content="Víctor Reyes" >
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="../../assets/css/bootstrap.css"/>
		
	</head>
<style>
	div#cont{
		width:40%;
		margin: 0 auto;
	}
</style>	
	
	<body>
		<div class="container">
 		   <div class="row">
      		<div id="cont" class="col-sm-6 col-md-4 col-md-offset-4">
            	<h1 class="text-center login-title">Iniciar Sesión</h1>
            	<div class="account-wall">
               	<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
		<form class="form-signin" action="<?= base_url()?>" method="post">
               		<input id="email" type="email" name="mailUs" class="form-control" placeholder="Email" required autofocus>
               		<input id="pass" type="password" name="paswd" class="form-control" placeholder="Password" required>
                	<button id="submit_login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                	<label class="checkbox pull-left">
                  		<input type="checkbox" value="remember-me">
                   		Remember me
                	</label>
                	<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            	</div>
            	<a href="#" class="text-center new-account">Create an account </a>
        		</div>
    		</div>
		</div>
		<div id="mensaje"></div>
	</body>
	
	<script type="text/javascript" src="../../assets/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url();?>js/main.js"></script>
