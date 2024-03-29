<?php

$linhas = $_POST["lin"];
$colunas = $_POST["col"];

    $linhas = $_POST["lin"];
    $colunas = $_POST["col"];
    
    if ($linhas > 0 && $colunas > 0) {
        echo "<h2>Tabela Gerada:</h2>";
        echo "<h3>L = Linha";
        echo "<h3>C = Coluna";
        echo "<br><br><table border='1'>";
        
        for ($i = 0; $i < $linhas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $colunas; $j++) {
                 echo "<td>L " . ($i + 1) . ", C " . ($j + 1) . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>Preencha os campos corretamente.</p>";
    }
?>

<br><br>
<a href="exercicio4.php">Gerar nova tabela</a><br><br>
<a href="listaexerc4.php">Voltar à lista de exercícios 2</a><br><br>
<a href="../index.php">Voltar ao menu principal</a><br><br>