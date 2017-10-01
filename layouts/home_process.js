window.onload = function(){
    var sena = document.getElementById("sena").addEventListener("click", senaClick);
    var quadra = document.getElementById("quadra").addEventListener("click", quadraClick);
    var quina = document.getElementById("quina").addEventListener("click", quinaClick);
}

function senaClick(){
    var repeat = 1;
    try{
      var qtd = parseInt(document.getElementById("quantidade").value);
      if((qtd % 1 === 0))
        if(qtd < 6){
            repeat = 6;
        }else{
            repeat = qtd;
        }else{
            alert("Digite um valor inteiro");
            return false;
        }
     
    }catch(err){
        alert("Houve um erro");
    };
    var calculo = 0;
    var valores = [];
    var contador = 1;
    if(!(qtd == "" || qtd == null)){
        for(var y = 1; y <=qtd; y++){
        for(var i=1; i<=repeat;i++){
            if(!(contador <= 6)){
                contador = 0;
                contador++;
                valores += ["<br>"+Math.floor(Math.random()*60+1)];
            }else{
            contador++;
            valores += [" "+Math.floor(Math.random()*60+1)];
            } 
        }
        }
        document.getElementById("resultado").innerHTML = "Jogos:<br> "+valores;
        document.getElementById("preco").innerHTML = "Preço:<br>"+"R$: "+(qtd*3.50);
    }
}
function quadraClick(qtd){
    
}
function quinaClick(qtd){
    
}