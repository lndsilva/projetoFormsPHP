<?php 

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



 ?>