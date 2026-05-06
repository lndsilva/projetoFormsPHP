<?php 

	$nome = $_POST['nome'];

	$peso = $_POST['peso'];

	$altura = $_POST['altura'];

	$imc = $peso / ($altura * $altura);

	$classificacao = ""; 

	if ($imc <= 18.5) {
		$classificacao = "Baixo peso";
	}
	if ($imc >= 18.6 && $imc <= 24.9) {
		$classificacao = "Normal";
	}
	if ($imc >= 24.91 && $imc <= 25.00) {
		$classificacao = "Sobrepeso";
	}
	if ($imc >= 25.01 && $imc <= 29.90) {
		$classificacao = "Pré-obeso";
	}
	if ($imc >= 29.91 && $imc <= 34.90) {
		$classificacao = "Obeso I";
	}
	if ($imc >= 34.91 && $imc <= 39.90) {
		$classificacao = "Obeso II";
	}
	if ($imc >= 40.00) {
		$classificacao = "Obeso III";
	}

	printf("Olá: $nome <br>");
	printf("Peso inserido: %.2f <br>",$peso);
	printf("Altura inserida: %.2f <br>", $altura);
	printf("Sua classificação: $classificacao <br>");
	printf("Seu IMC: %.2f", $imc);




 ?>