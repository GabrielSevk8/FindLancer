function verMais() {
    let pontos = document.querySelector(".pontos");
    let txtDetalhe = document.querySelector(".txtDetalhe");
    let verMais = document.querySelector(".mais");

    if (pontos.style.display === "none") {
        pontos.style.display = "inline";
        txtDetalhe.style.display = "none";
        verMais.innerHTML = "Ver Mais";
    } else {
        pontos.style.display = "none";
        txtDetalhe.style.display = "block";
        verMais.innerHTML = "Ver Menos";
    }
}
