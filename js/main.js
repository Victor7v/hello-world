/**
*
*	Código jQuery  
*
**/

$(document).ready(function(){

	var home = '<?= echo base_url() ?>';

	$(document).on('click','#submit_login',function(){
		if($(this).parent('#email').value() === 'root'){
			console.log('el email está vacio');	
		} 
	});
	
	console.log(window.location.origin+'index.php/Bienvenida');
//	$('#mensaje').load(window.location.origin + "/index.php/");



});
