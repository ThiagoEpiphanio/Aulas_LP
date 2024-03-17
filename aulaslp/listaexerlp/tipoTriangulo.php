<?php

	$a = $_POST['medidaA'];
	$b = $_POST['medidaB'];
	$c = $_POST['medidaC'];
	$img1 = "equilatero.png";
	$img2 = "isosceles.png";
	$img3 = "escaleno.png";
	
	if ($a == $b && $b == $c){
		echo "O triângulo tem todos os lados iguais, portanto é <strong>EQUILÁTERO</strong><br>";
		echo "<img src= '$img1' alt='Equilatero'>";
		
	}


	elseif ($a == $b || $a == $c || $b == $c){
		echo "O triângulo tem dois lados iguais, portanto é <strong>ISÓSCELES</strong><br>";
		echo "<img src= '$img2' alt='Isósceles'>";
	}


	else{ 
		echo "O triângulo tem todos os lados diferentes, portanto é <strong>ESCALENO</strong><br>";
		echo "<img src= '$img3' alt='Escaleno'>";
	}

?>

<br><br>
<a href="classificacaoTriangulo.php"> Novo cálculo</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>