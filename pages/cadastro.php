<!DOCTYPE html>
<html>
<head>
	<title>Projeto Gerador de Números</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" src="cadastro_process.js"></script>
</head>
<body>
<div class="container">
<h1>Cadastro no Sistema</h1>
</div>
<br>
<div class="container">
		<form onsubmit="return validarDados();"  class="form-horizontal" method="POST" action="/Api/usuarios.php">
			<label>Nome:</label>
			<input type="text" class="form-control" required id="nome" name="nome">
			<label>Email:</label>
			<input type="email" class="form-control" required id="email" name="email">
			<label>Nascimento:</label>
			<input type="datetime" class="form-control" required id="nascimento" name="nascimento">
			<label>Senha:</label>
			<input type="password" class="form-control" required id="senha1" name="senha1">
			<label>Confirme a senha:</label>
			<input type="password" class="form-control" required id="senha2" name="senha2">
			<br>
			<button type="submit"  class="btn btn-primary" onclick="validarDados();">Cadastrar</button>
		</form>
</div>
</body>