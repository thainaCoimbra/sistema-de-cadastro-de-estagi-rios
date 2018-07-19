var datafinal = document.getElementById('datafinal');

function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i);
    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }
    verificar();
}

function gerarData(str) {
    var partes = str.split("/");
    return new Date(partes[2], partes[1] - 1, partes[0]);
}

function verificar() {
    var inicio = datainicial.value;
    var fim = datafinal.value;
    if (inicio.length != 10 || fim.length != 10) return;

    if (gerarData(fim) <= gerarData(inicio)) alert("A data inicial é maior que a data final");
}