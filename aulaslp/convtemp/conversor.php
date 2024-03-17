<?php

	$inp = $_POST['input'];
	$out = $_POST['output'];
	$temp = $_POST['txtTemp'];	

	if (($inp=="c")&&($out=="f")){
		$conv = $temp * 1.8 + 32;
	}
	
	else if (($inp=="c")&&($out=="k")){
		$conv = $temp + 273.15;
	}

	else if (($inp=="c")&&($out=="ra")){
		$conv = $temp * 1.8 + 32 + 459.67;
	}

	else if (($inp=="c")&&($out=="re")){
		$conv = $temp * 0.8;
	}

	else if (($inp=="k")&&($out=="c")){
		$conv = $temp - 273.15;
	}

	else if (($inp=="k")&&($out=="f")){
		$conv = $temp * 1.8 - 459.67;
	}

	else if (($inp=="k")&&($out=="ra")){
		$conv = $temp * 1.8;
	}

	else if (($inp=="k")&&($out=="re")){
		$conv = ($temp - 273.15) * 0.8;
	}

	else if (($inp=="f")&&($out=="c")){
		$conv = ($temp - 32) / 1.8;
	}

	else if (($inp=="f")&&($out=="k")){
		$conv = ($temp + 459.67) / 1.8;
	}

	else if (($inp=="f")&&($out=="ra")){
		$conv = $temp + 459.67;
	}

	else if (($inp=="f")&&($out=="re")){
		$conv = ($temp - 32) / 2.25;
	}

	
	echo "<b>A conversão da temperatura é $conv graus<br><br><b>";

?>

<a href="convtemp.php"> Nova conversão</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>