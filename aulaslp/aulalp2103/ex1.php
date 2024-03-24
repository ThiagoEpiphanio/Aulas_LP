<?php

$num1 = $_POST['txtNum1'];
$num2 = $_POST['txtNum2'];

while (true){
    if (($num1<=0) || ($num2<=0)){
        echo"<b>Os valores não podem ser iguais ou inferiores a 0.<br> Digite outro valor<br>";
        break;
    }
    else if ($num1 > $num2){
        echo"<b>O primeiro valor deve ser menor que o segundo.<br> Digite novamente<br>";
        break;
    }

    echo "<b>A. Os números sequenciais entre o inicial e final são:</b><br><br>";
    $contagem = 0;
    $soma = 0;
    for ($i=$num1; $i<=$num2; $i ++) {
        echo "$i ";
        $contagem++;  
        $soma += $i;
        $media = $soma / $contagem;
    }

    echo "<b><br><br><br>B. Os números gerados resultam um total de $contagem números</b>";
    echo "<b><br><br><br>C. A soma dos números gerados no intervalo é $soma</b>"; 
    echo "<b><br><br><br>D. A média soma dos números gerados no intervalo é $media</b>";

    if ($contagem > 15){
        echo "<b><br><br><br>E. Excesso de parâmetros, mais de 15 números números gerados</b>";
    }
    else{
        echo "<b><br><br><br>E. Dentro dos parâmetros, menos de 15 números gerados.</b>";
    }


    break;
        
}

   
?>

<br><br><br>
<a href="exercicio1.php">Efetuar novo cálculo</a><br><br>
<a href="aula2103.php.php">Voltar ao menu anterior</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>