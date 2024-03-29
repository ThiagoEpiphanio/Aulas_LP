<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista 3 - Exercício 6</title>
</head>
<body>

	<h2>Desenho do triângulo deitado à direita</h2>

<?php

$tamanho = 5;

for ($i = 1; $i <= $tamanho; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = $tamanho - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

</body>

<br><br>
<a href="listaexerc3.php">Voltar à lista de exercícios 3</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>

</html>