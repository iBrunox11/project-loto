<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto Gerador de Números</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script>
		
		window.onload = function() {
     var segundos = 4;
     setTimeout(function () {
         var hidding = document.getElementById("hidding");
         var show = document.getElementById("hid");
         show.style = "display:inline"; //exibe o formulário
         hidding.className = ""; //Remove o load
     }, segundos * 1000);
};
  function entrar(){
};

 
	</script>
	<style>
		
		.loader {
    border: 16px solid #f3f3f3; /* Cor da borda */
    border-top: 16px solid #3498db; /* Cor do load */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.container {
	padding-top: 10%;
	text-align: center;

}
.container .loader{
	margin: 0 auto;

}


 #hid {
  display: none;
}

	</style>

		

</head>
<body>
<div class="container">
<h1>Projeto integrado</h1>
<div class="loader" id="hidding"></div>
</div>

<div id="hid" class="container">
	<form method="POST" >
  <div  class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email">
    <!-- <small id="emailHelp" class="form-text text-muted">Entre com seus dados de acesso</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox"  class="form-check-input">
      Não sou um robô
    </label>
  </div>
  <button type="submit" id="btnEntrar" onclick="entrar()" class="btn btn-primary">Entrar</button>
</form>
</div>

</body>
</html>