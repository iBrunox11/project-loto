<!DOCTYPE html>
<html>
<!---imports-->
<head>
    <title>Giro-loto</title>
<meta charset="utf-8" lang="pt-br"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/layouts/style_home.css" type="text/css">
    <script type="text/javascript" src="/layouts/home_process.js"></script>
<!---style-->
</head>
   <!---content-->
<body>
<!-- Nav tabs -->
<div class="container">
<nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link active" href="#inicio">Jogar</a>
  <a class="nav-item nav-link" href="#">Entender Sobre</a>
  <a class="nav-item nav-link" href="#">Quem fez?</a>
</nav>
</div>
<br>
<br>
<br>
<div class="container">
<h1>Giro-Loto, sistema integrado gerador de números ganhadores da mega sena.
</h1>
<p class="lead">
  Você poder gerar qualquer número, para todo tipo de jogo possível a mega sena.
</p>
<br>
<br>
<h4>Escolha a sua opção de jogo:</h4>
<br>
    <!-- Example single danger button -->
<div class="container"  id="inicio">
    <p class="lead">Digite a quantidade de jogos:</p>
    <input type="text" id="quantidade" />
    <button type="button" id="sena" class="btn">Sena</button>
    <button type="button" id="quadra" class="btn">Quadra</button>
    <button type="button" id="quina" class="btn">Quina</button>
  
    <div>
        <br>
        <p class="lead"  id="resultado">Sequência:</p>
        <p class="lead"  id="preco">Preço:</p>
    </div>
</div>
</div>
</body>
</html>