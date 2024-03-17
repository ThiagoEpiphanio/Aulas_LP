<?php

$temp = $_POST['txtTemp'];

$conv = round(($temp*1.8)+32,2);

echo"<br>A temperatura em Fahrenheit é: $conv";    

?>

<a href="aula0703.php">Voltar para ao anterior</a><br><br><br>
<a href="../index.php">Voltar ao menu principal</a><br>
