 <?php
    $numero = $_POST["numero"];

    date_default_timezone_set('America/Sao_Paulo');

    $dataAtual = date("d-m-Y");
    $horaAtual = date("H:i:s");

    echo "<b>Data: $dataAtual <br></b>";
    echo "<b>Hora: $horaAtual <br></b>";

    echo "<h2>Números posteriores a $numero:</h2>";
    
    	for ($i = 1; $i <= 50; $i++) {
       		 echo ($numero + $i) . "<br>";
        }
    
    ?>

<br><br><br>
<a href="exercicio2.php">Imprimir novo número</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>