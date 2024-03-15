let verMais = document.querySelectorAll(".mais");
let verMenos = document.querySelectorAll(".menos");
let primeiroTexto = document.querySelectorAll(".primeiroTxt");
let detalhes = document.querySelectorAll(".txtDetalhe");

function trocarTxtMais(event) {
    let index = Array.from(verMais).indexOf(event.target);
    verMais[index].style.setProperty('display', 'none');
    detalhes[index].style.setProperty('display', 'inline');
    verMenos[index].style.setProperty('display', 'inline');
}

function trocarTxtMenos(event) {
    let index = Array.from(verMenos).indexOf(event.target);
    verMenos[index].style.setProperty('display', 'none');
    detalhes[index].style.setProperty('display', 'none');
    verMais[index].style.setProperty('display', 'inline');
}

for (let i = 0; i < verMais.length; i++) {
    verMais[i].addEventListener("click", trocarTxtMais);
    verMenos[i].addEventListener("click", trocarTxtMenos);
}
