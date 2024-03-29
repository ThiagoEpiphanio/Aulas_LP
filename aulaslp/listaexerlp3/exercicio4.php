<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista 3 - Exercício 4</title>
</head>
<body>
	<h3>Imprimindo a soma dos números de 1 a 15</h3>

<?php

$soma = 0;

for ($i = 1; $i <= 15; $i++) {
    $soma += $i;
}

echo "<b>A soma dos números de 1 a 15 é: $soma </b>";
?>

</body>

<br><br><br>
<a href="exercicio4.php">Reimprimir</a><br><br>
<a href="listaexerc3.php">Voltar à lista de exercícios 3</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>

</html>