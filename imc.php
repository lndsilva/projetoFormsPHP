<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMC</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
	<h2>Tabela de classificação</h2>
	
	<img src="imagem/imc.png">
	
	<h1>Calculadora IMC</h1>
	
	<form action="calcular_imc.php" method="post">
		<label for="altura">Sua altura:</label>
		<input type="text" name="altura" id="altura" placeholder="Ex.: 1.65" >
		<label for="peso">Seu peso:</label>
		<input type="text" name="peso" id="peso" placeholder="Ex.: 85" >
		<input type="submit" name="calcular" value="Calcular">
	</form>

</body>
</html>