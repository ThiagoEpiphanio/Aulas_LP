<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
</head>
<body>
	<h2>Digite os 2 números para efetuar os cálculos propostos no exercício</h3><br>

	<h3>Os números digitados, devem obedecer as seguintes regras:<br><br>
		- Ambos não podem ser iguais ou menores que zero;<br>
		- O primeiro número, deverá obrigatoriamente ser menor que o segundo.<br></h3>


	<form action="ex1.php"	method="post">
	
		<input type="number" name="txtNum1"	id="txtNum1"><br> 
		<label><b>1- Digite o primeiro número aqui<br><br></label>
		
		<input type="number" name="txtNum2"	id="txtNum2"><br> 
		<label>2- Digite o segundo número número aqui</b><br><br></label>

		<input type="submit" name="btnEnviar">

	</form>	

</body>

<br><br><br>
<a href="aula2103.php">Voltar ao menu anterior</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>

</html>