<?php 
include("/Api/usuarios.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto Gerador de Números</title>
  <!--Imports-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/layouts/style_loading.css">
<script src="/layouts/loading.js"  type="text/javascript"></script>
</head>
<!--page-->
<body>
<div class="container">
<h1>Projeto Loto Mania</h1>
<div class="loader" id="hidding"></div>
</div>
<div id="hid" class="container">
	<form method="POST" action="/Api/usuarios.php" >
  <div  class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-check">
    <a href="cadastro.php"><label>Não possuo cadastro</label></a>
  </div>
  <button type="submit" id="btnEntrar" onclick="entrar()" class="btn btn-primary">Entrar</button>
</form>
</div>

</body>
</html>