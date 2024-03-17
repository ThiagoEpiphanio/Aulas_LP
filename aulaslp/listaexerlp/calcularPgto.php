<?php

	$precoProduto = $_POST['valorProduto'];
	$acrescimo = 0.16;
	$valorTotal = $precoProduto + ($precoProduto * $acrescimo);
	$valorParcela = $valorTotal / 10;
	

	echo "O valor de cada parcela é de R$ $valorParcela<br><br>";
	echo "O valor total do produto é R$ $valorTotal";

?>

<br><br>
<a href="condicaoPagamento.php"> Novo cálculo</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>