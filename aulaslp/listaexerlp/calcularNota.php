<?php

	$notaPartida = $_POST['notaPartida'];
	$notaJuiz1 = $_POST['txtNotaJuiz1'];
	$notaJuiz2 = $_POST['txtNotaJuiz2'];
	$notaJuiz3 = $_POST['txtNotaJuiz3'];
	$notaJuiz4 = $_POST['txtNotaJuiz4'];
	$notaJuiz5 = $_POST['txtNotaJuiz5'];

	$mediaNotas = ($notaJuiz1 + $notaJuiz2 + $notaJuiz3 + $notaJuiz4 + $notaJuiz5) / 5;
	$notaFinal = $mediaNotas + $notaPartida;

	echo "A nota final é $notaFinal";
?>

<br><br>
<a href="competicaoGinastica.php"> Novo cálculo</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>