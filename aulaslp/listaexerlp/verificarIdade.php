<?php

    	$Idade = $_POST['txtIdade'];

    	if ($Idade<18) 
    	{
    		echo"Você é menor de idade";
    	}
    	else
    	{
    		echo"Você é maior de idade";
    	}	

?>

<br><br>
<a href="maioridade.php"> Nova verificação</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>