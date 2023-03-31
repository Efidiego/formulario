<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Coleta os dados do formulário
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$cep = $_POST["cep"];
	$modelo = $_POST["modelo"];
	$ano = $_POST["ano"];
	$placa = $_POST["placa"];
	$chassi = $_POST["chassi"];

	// Configura as informações do e-mail
	$para = "efidiego.seguros@gmail.com";
	$assunto = "Formulário Dados/Cálculo";
	$mensagem = "Nome: $nome\nEndereço: $endereco\nCEP: $cep\nModelo do Veículo: $modelo\nAno: $ano\nPlaca: $placa\nChassi: $chassi";

	// Envia o e-mail
	mail($para, $assunto, $mensagem);

	// Redireciona o usuário para uma página de confirmação
	header("Location: confirmacao.html");
	exit;
}
?>
