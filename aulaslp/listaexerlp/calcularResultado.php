<?php

	$custo = $_POST['txtCusto'];
	$precoVenda = $_POST['txtPrecoVenda'];
	$qteProduto = $_POST['txtQtdeVendida'];

	$custoTotal = $custo * $qteProduto;
	$vendaTotal = $precoVenda * $qteProduto;
	$lucroTotal = $vendaTotal - $custoTotal;

	echo "O valor total vendido é de R$ $vendaTotal<br><br>";
	echo "O lucro total é de R$ $lucroTotal";

?>

<br><br>
<a href="controleProducao.php"> Novo cálculo</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>