<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

while (true) {

	if (($num1 < 10 || $num1 > 100) || ($num2 < 10 || $num2 > 100)) {
		echo "<b>Os números devem estar compreendidos entre 10 e 100</b>";
		break;
	}

	else if ($num1 > $num2){
		echo "<b>O primeiro valor deve ser menor que o segundo maior. <br>Digite os números novamente</b>";
		break;
	}

	else{
		$somaTotais = 0;
		$somaPares = 0;

		for ($i=$num1; $i<=$num2; $i++){
			$somaTotais += $i;

			if ($i%2 == 0){
				$somaPares += $i;
			}
		}

		echo "<b>A. A soma dos valores totais é $somaTotais</b>";
		echo "<b><br><br><br>B. A soma dos valores pares é $somaPares</b>";

	}

	break;
}
?>

<br><br><br>
<a href="exercicio3.php">Efetuar novo cálculo</a><br><br>
<a href="aula2103.php.php">Voltar ao menu anterior</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>