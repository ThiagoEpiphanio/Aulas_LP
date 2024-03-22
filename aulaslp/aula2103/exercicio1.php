<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
</head>
<body>
	<h3>Digite os 2 números para efetuar os cálculos propostos no exercício</h3>

	<input type="text" name="txtNum1"><br> 
	<label>Insira o primeiro número aqui<br><br></label>
	
	<input type="text" name="txtNum2"><br> 
	<label>Insira o segundo número número aqui<br><br></label>

	<input type="submit" name="btnEnviar">

	<?php

		$num1 = $_POST['txtNum1'];
		$num2 = $_POST['txtNum2'];

	while (($num1>0) && ($num2>0)) {

		if (($num1<=0) || ($num2<=0)){
			echo "Ambos os números precisam ser maiores que 0";
		}
	}


	?>

</body>
</html>