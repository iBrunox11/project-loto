window.onload = function(){
    var sena = document.getElementById("sena").addEventListener("click", senaClick);
    var quadra = document.getElementById("quadra").addEventListener("click", quadraClick);
    var quina = document.getElementById("quina").addEventListener("click", quinaClick);
}

function senaClick(){
    try{
      var qtd = parseInt(document.getElementById("quantidade").value);
      if(!(qtd % 1 === 0)){
           alert("Digite um valor inteiro");
            return false;
      }
    }catch(err){
        alert("Houve um erro");
    };
    calculoSena(qtd);   
};

function calculoSena(qtd){
    var valores = [];
    var contador = 0;
    if(!(qtd == "" || qtd == null)){
        for(var y = 1; y <=qtd; y++){
        for(var i=1; i<=6;i++){
            if(!(contador < 6)){
                contador = 0;
                contador++;
                valores += [" "+"<p class='quebra1'>/</p>"+" "+"<p class='bolinha1'>"+Math.floor(Math.random()*60+1)+"</p>"];
            }else{
            contador++;
            valores += [" "+"<p class='bolinha1'>"+Math.floor(Math.random()*60+1)+"</p>"];
            } 
        }
        }
        document.getElementById("resultado").innerHTML = "Sequência:<br><br>"+valores;
        document.getElementById("preco").innerHTML = "Preço:<br>"+"R$: "+(qtd*3.50);
    }
}


function quadraClick(){
    try{
      var qtd = parseInt(document.getElementById("quantidade").value);
      if(!(qtd % 1 === 0)){
           alert("Digite um valor inteiro");
            return false;
      }
    }catch(err){
        alert("Houve um erro");
    };
    calculoQuadra(qtd);   
};

function calculoQuadra(qtd){
    var valores = [];
    var contador = 0;
    if(!(qtd == "" || qtd == null)){
        for(var y = 1; y <=qtd; y++){
        for(var i=1; i<=4;i++){
            if(!(contador < 4)){
                contador = 0;
                contador++;
                valores += [" "+"<p class='quebra2'>/</p>"+" "+"<p class='bolinha2'>"+Math.floor(Math.random()*60+1)+"</p>"];
            }else{
            contador++;
            valores += [" "+"<p class='bolinha2'>"+Math.floor(Math.random()*60+1)+"</p>"];
            } 
        }
        }
        document.getElementById("resultado").innerHTML = "Sequência:<br><br> "+valores;
        document.getElementById("preco").innerHTML = "Preço:<br>"+"R$: "+(qtd*3.50);
    }
}

function quinaClick(){
    try{
      var qtd = parseInt(document.getElementById("quantidade").value);
      if(!(qtd % 1 === 0)){
           alert("Digite um valor inteiro");
            return false;
      }
    }catch(err){
        alert("Houve um erro");
    };
    calculoQuina(qtd);   
};

function calculoQuina(qtd){
    var valores = [];
    var contador = 0;
    if(!(qtd == "" || qtd == null)){
        for(var y = 1; y <=qtd; y++){
        for(var i=1; i<=5;i++){
            if(!(contador < 5)){
                contador = 0;
                contador++;
                valores += [" "+"<p class='quebra3'>/</p>"+" "+"<p class='bolinha3'>"+Math.floor(Math.random()*60+1)+"</p>"];
            }else{
            contador++;
            valores += [" "+"<p class='bolinha3'>"+Math.floor(Math.random()*60+1)+"</p>"];
            }  
        }
        }
        document.getElementById("resultado").innerHTML = "Sequência:<br><br> "+valores;
        document.getElementById("preco").innerHTML = "Preço:<br>"+"R$: "+(qtd*3.50);
    }
}