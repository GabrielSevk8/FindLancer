// JavaScript para abrir o modal "Sobre"
var sobremodal = document.getElementById('sobremodal'); // Obtém o modal
var sobreBtn = document.getElementById("sobre"); // Obtém o botão que abre o modal
var span = document.getElementsByClassName("close")[0]; // Obtém o elemento de fechar modal

sobreBtn.onclick = function() {
  sobremodal.style.display = "block"; // Mostra o modal ao clicar no botão
}

span.onclick = function() {
  sobremodal.style.display = "none"; // Fecha o modal ao clicar no elemento de fechar
}

window.onclick = function(event) {
  if (event.target == sobremodal) {
    sobremodal.style.display = "none"; // Fecha o modal ao clicar fora dele
  }
}

// JavaScript para abrir o modal "Política de Privacidade"
var politicamodal = document.getElementById('politicamodal'); // Obtém o modal
var politicaBtn = document.getElementById("politica"); // Obtém o botão que abre o modal
var span2 = document.getElementsByClassName("close2")[0]; // Obtém o elemento de fechar modal

politicaBtn.onclick = function() {
  politicamodal.style.display = "block"; // Mostra o modal ao clicar no botão
}

span2.onclick = function() {
  politicamodal.style.display = "none"; // Fecha o modal ao clicar no elemento de fechar
}

window.onclick = function(event) {
  if (event.target == politicamodal) {
    politicamodal.style.display = "none"; // Fecha o modal ao clicar fora dele
  }
}
