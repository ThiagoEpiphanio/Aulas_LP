<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classificação de um Triângulo</title>
</head>
<body>

	<h1>Vamos verificar o tipo de triângulo
	<h3>Considerando a imagem abaixo, digite o valor das áreas solicitadas nos respectivos campos:</h3>

	<a href="triangulo.png"><img src="triangulo.png"></a>

	<form action="tipoTriangulo.php"  method="post">

		<label>Digite a medida da reta A do triângulo</label><br>
		<input type="number" name="medidaA" 	id="medidaA"	required><br><br>

		<label>Digite a medida da reta B do triângulo</label><br>
		<input type="number" name="medidaB"	id="medidaB"	required><br><br>

		<label>Digite a medida da reta C do triângulo</label><br>
		<input type="number" name="medidaC"	id="medidaC"	required><br><br>

		<input type="submit" name="btnVerifica"	id="btnVerifica"	value="Verificar">

</body>

<br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>

</html>