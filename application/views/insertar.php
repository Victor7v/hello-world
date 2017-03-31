
<!DOCTYPE html>

<html lang="ES">

	<head>
		<meta charset="utf-8">
   	<title>Primera Página</title>
  	 	<meta name="description" content="The HTML5 Herald">
  		<meta name="author" content="Víctor Reyes" >
  		
		<link rel="stylesheet" href="../../assets/css/bootstrap.css"/>
		
	</head>
	<body>
		<h1> Nuevo Usuario </h1>

<?php
	echo form_open( base_url().'index.php/Holamundo/insertar/');
	echo form_label('Email', 'email');
	echo form_input('email'); echo '<br>';	
	echo form_label('Nombre de usuario', 'usuario');
	echo form_input('usuario'); echo '<br>';
	echo form_label('Contraseña', 'paswd');
	echo form_input('paswd'); echo '<br>';
	echo form_submit('btnSubmit','enviar');
	echo form_close();
	
?>	
	</body>
</html>
	
