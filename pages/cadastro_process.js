function validarDados(){
	var nome = document.getElementById("nome").value;
	var email = document.getElementById("email").value;
	var nascimento = document.getElementById("nascimento").value;
	var senha1 = document.getElementById("senha1").value;
	var senha2 = document.getElementById("senha2").value;
    
    if(nome != null && email != null && senha1 != null && 
      senha2 != null && senha1 === senha2){
        return true;
    }
    return false;
}

