<html>
	<body>
		<meta charset="utf-8">
		<input type="text" maxlength="10" placeholder="dd/mm/aaaa" onkeyup="formatar('##/##/####', this)" id="datainicial">
<input type="text" maxlength="10" placeholder="dd/mm/aaaa" onkeyup="formatar('##/##/####', this)" id="datafinal">

	</body>
	<script type="text/javascript"> 
	var datainicial = document.getElementById('datainicial');
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
} </script>
	
</html>


/usr/share/nginx/html