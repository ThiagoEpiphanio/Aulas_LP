<?php

$num = $_POST['numero'];

while (true){

	if ($num<1 || $num>10){
		echo "<b>O número digitado deve estar compreendido entre 1 a 10</b>";
		break;
	}		

	else{
		echo "<b>Número digitado pelo usuário = $num<br><br></b>";

		for ($i=1; $i<=10; $i++){
		$result = $num * $i;	
	
		echo "<br><b>$num X $i = $result<br></b>";
		}
	break;
	}		
}
?>

<br><br><br>
<a href="exercicio2.php">Nova Tabuada</a><br><br>
<a href="listaexerc2.php">Voltar à lista de exercícios 2</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>