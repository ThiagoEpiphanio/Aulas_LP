<?php

$num = $_POST['numero'];

if (($num<1) || ($num>10)){
	echo "<b>Número inválido. <br>Digite um valor de 1 a 10</b>";
}
	else{
	$contagem = 0;
	while ($contagem != $num){
		$contagem ++;
		echo "<br>$num";
	}
}

?>

<br><br><br>
<a href="exercicio3.php">Imprimir novo número</a><br><br>
<a href="listaexerc3.php">Voltar à lista de exercícios 3</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>