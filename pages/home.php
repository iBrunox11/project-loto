<!DOCTYPE html>
<html>
<!---imports-->
<head>
    <title>Giro-loto</title>
<link rel="shortcut icon" type="image/png" href="/images/clover.png"/>
<meta charset="utf-8" lang="pt-br"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/layouts/style_home.css" type="text/css">
    <script type="text/javascript" src="/layouts/home_process.js"></script>
<!---style-->
    <style>
        /*utilizado para dar estilo a barra divisoria dos valores*/
        .quebra1{
            display: inline;
            color: #007bff;;
            font-weight: bold;
        }
        .quebra2{
            display: inline;
            color: #ffc107;
            font-weight: bold;
        }
        .quebra3{
            display: inline;
            color: #dc3545;
            font-weight: bold;
        }
        #active{
            background-color: rgba(65, 191, 10, 0.77);
            
        }
        #voltar{
            color: #a5a5a5;
            text-decoration-style: none;
        }
    </style>
</head>
   <!---content-->
<body>
<!-- Nav tabs -->
<div class="container" id="inicio">
<nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link active" id="active" href="#jogar">Jogar</a>
  <a class="nav-item nav-link" href="#sobre">Como funciona?</a>
  <a class="nav-item nav-link" href="#quemfez">Quem fez?</a>
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
<div class="container"  id="jogar">
    <p class="lead">Digite a quantidade de jogos:</p>
    <input type="text" id="quantidade" />
    <button type="button" id="sena" class="btn btn-primary">Sena</button>
    <button type="button" id="quadra" class="btn btn-warning">Quadra</button>
    <button type="button" id="quina" class="btn btn-danger">Quina</button>
  
    <div>
        <br>
        <p class="lead"  id="resultado">Sequência:</p>
        <p class="lead"  id="preco">Preço:</p>
    </div>
</div>
<h4>Entenda um pouco melhor sobre o sistema de jogos.</h4>
<p class="lead"  id="sobre">
O que é Lorem Ipsum?
Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
</p>
<p class="lead">
Porque nós o usamos?
É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
</p>
<p class="lead">
De onde ele vem?
Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.
</p>
    <h4 id="quemfez">Quem desenvolveu?</h4>
    <p class="lead">Meu nome é Bruno, tenho 19 anos e sou estudante de Análise e Desenvolvimento de Sistemas na Universidade Cruzeiro do Sul.
    Desenvolvi este site com o intuito de estudar meus conceitos de Bootstrap 4.0 e 3.4, CSS3, PHP e além disso pratiquei o uso de javascript puro (excessão ao jquery do boots).
    O projeto é OpenSource então fiquem á vontade para baixar no github e modificar o que for preciso.
    <a href="https://github.com/iBrunox11/project-loto" target="_blank">Link do github.</a>
    </p>
    <img src="/images/dev_resp.jpg" class="img-fluid" alt="Responsive image">
    <br>
    <br>
</div>
    <footer>
    <div class="container">
    <p class="lead">
    FavIcon made by CreativeCommons from www.flaticon.com 
    </p>
    <p class="lead">
    <a href="#inicio" id="voltar">Voltar</a>
    </p>
    </div>
    </footer>
</body>
</html>