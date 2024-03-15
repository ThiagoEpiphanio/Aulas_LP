<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action=""  method="post">
		<select name="rdComb">
            <option>Escolha o combustível</option>
            <option value="a">Álcool</option>
            <option value="g">Gasolina</option>
            <option value="d">Diesel</option>
        </select>

        <select name="rdPag">
            <option>Escolha a forma de pagamento</option>
            <option value="v">Á vista</option>
            <option value="p">Parcelado</option>
        </select>

        <br>
        <h3> Digite a quantidade litros </h3>
		<input type="text"	name="txtLitros"><br><br>
		<input type="submit" name="btnCalcular"	value="Calcular">

	</form>

	<?php

		$comb = $_POST['rdComb'];
		$pag = $_POST['rdPag'];
		$litros = $_POST['txtLitros'];

		if (($comb=="a")&&($pag=="p"))
		{
			$res = $litros * 3.10;
		}
		else if (($comb=="a")&&($pag=="v"))
		{
			$res = $litros * 3.10;
			$des = $res * 0.05;
			$res = $res - $des;
		}
		else if (($comb=="g")&&($pag=="p"))
		{
			$res = $litros * 5.79;
		}
		else if (($comb=="g")&&($pag=="v"))
		{
			$res = $litros * 5.79;
			$des = $res * 0.08;
			$res = $res - $des; 
		}
		else if (($comb=="d")&&($pag=="p"))
		{
			$res = $litros * 6;
		}
		else if (($comb=="d")&&($pag=="v"))
		{
			$res = $litros * 6;
			$des = $res * 0.1;
			$res = $res - $des; 
		}
		else
		{
			$res = 0;
			echo "Por favor, escolha um combustível e uma forma de pagamento<br>";
		}
		
		echo "Valor a pagar: $res";

	?>

</body>
</html>