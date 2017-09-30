window.onload = function() {
     var segundos = 4;
     setTimeout(function () {
         var hidding = document.getElementById("hidding");
         var show = document.getElementById("hid");
         show.style = "display:inline"; //exibe o formulário
         hidding.className = ""; //Remove o load
     }, segundos * 200);
};