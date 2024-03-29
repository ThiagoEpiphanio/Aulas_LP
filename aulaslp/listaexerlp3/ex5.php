<?php
    
$numero = $_POST['numero'];

    if ($numero > 0) {
        echo "<h2>Quantidade de \"radiobuttons\" solicitada: $numero</h2>";
        echo "<form>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "<input type='radio' name='radio_$i' id='radio_$i'>";
            echo "<label for='radio_$i'>$i</label><br>";
            }
            echo "</form>";
        } else {
            echo "<p>A quantidade de \"radiobuttons\" precisa ser maior que zero.</p>";
        }
?>

<br><br><br>
<a href="exercicio5.php">Gerar novos "radiobuttons"</a><br><br>
<a href="listaexerc3.php">Voltar à lista de exercícios 3</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>