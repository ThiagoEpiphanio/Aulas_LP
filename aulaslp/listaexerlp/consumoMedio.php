<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cálculo de Consumo Médio</title>
</head>
<body>

	<form action="calcularConsumo.php"  method="post">

		<label>Digite (em KM) a distância total percorrida</label><br>
		<input type="number" name="distanciaPercorrida"	id="distanciaPercorrida" required><br><br>

		<label>Digite (em litros) a quantidade de combustível</label><br>
		<input type="number" name="qtdeCombustivel"		id="qtdeCombustivel" required><br><br>

		<input type="submit" name="btnVerifica"		id="btnVerifica" 	value="Calcular">

</body>

<br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>

</html>