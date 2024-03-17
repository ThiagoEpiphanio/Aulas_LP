<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversor unidade de medidas de temperatura</title>
</head>
<body>

	<form action="conversor.php" method="post">

		<h2>Selecione a unidade de medida que deseja realizar a conversão</h2>

		<input type="radio"	value="c" name="input">Celsius<br><br>
		<input type="radio"	value="k" name="input">Kelvin<br><br>
		<input type="radio"	value="f" name="input">Fahrenheit<br><br>
		<br>

		<h2>Selecione a unidade de medida que deseja verificar o valor convertido</h2>

		<input type="radio"	value="c" name="output">Celsius<br><br>
		<input type="radio"	value="k" name="output">Kelvin<br><br>
		<input type="radio"	value="f" name="output">Fahrenheit<br><br>
		<input type="radio" value="ra"	name="output">Rankine<br><br>
		<input type="radio" value="re"	name="output">Réaumur<br><br>
		<br>

		<h3>Digite o valor a ser convertido e clique no botão abaixo</h3>
		<input type="text"	name="txtTemp"><br><br>
		<input type="submit" name="btnConverter"	value="Converter">
		<br><br>

	</form>


	<a href="../index.php">Voltar ao menu principal</a>

</body>
</html>