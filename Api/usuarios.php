<?php 

function getPagina(){
	
	$metodo = $_SERVER['REQUEST_METHOD'];
	$local = $_SERVER['REQUEST_URI'];
	$pessoa_cadastro = array();

	if($metodo == "POST" && $local == '/Api/usuarios.php'){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha1 = $_POST['senha1'];
		$senha2 = $_POST['senha2'];
		$data = $_POST['nascimento'];

		$pessoa_cadastro = ([$nome,$email,$senha1,$senha2,$data]);
		
		var_dump(json_encode($pessoa_cadastro));
		//var_dump($nome." ".$nascimento." ".$email." ".$senha1." ".$senha2." - ".$data);
	}
}

getPagina();