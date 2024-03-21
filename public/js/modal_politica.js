 // Encontre o h2 "Política de Privacidade"
 var btnAbrir = document.getElementById("politicaPriv");

 // Encontre o modal
 var modal2 = document.getElementById("politicamodal");

 // Encontre o elemento de fechar do modal
 var spanFechar = document.getElementsByClassName("close2")[0];

 // Quando o usuário clicar no botão, abrir o modal
 btnAbrir.onclick = function() {
   modal2.style.display = "block";
 }

 // Quando o usuário clicar no botão de fechar, fechar o modal
 spanFechar.onclick = function() {
   modal2.style.display = "none";
 }

 // Quando o usuário clicar fora do modal, fechar o modal
 window.onclick = function(event) {
   if (event.target == modal2) {
     modal2.style.display = "none";
   }
 }




