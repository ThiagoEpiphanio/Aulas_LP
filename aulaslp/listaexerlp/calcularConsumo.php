<?php

	$kilometragem = $_POST['distanciaPercorrida'];
	$ltsCombustivel = $_POST['qtdeCombustivel'];

	$consumoMedio = $kilometragem / $ltsCombustivel;
	$consumoMedio = number_format($consumoMedio, 2, '.', '');

	echo"O consumo médio é de $consumoMedio KM por litro";

?>

<br><br>
<a href="consumoMedio.php"> Novo cálculo</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>