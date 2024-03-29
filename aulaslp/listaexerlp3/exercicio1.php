<!DOCTYPE html>
<html>
<head>
    <title>Lista 3 - Exercício 1</title>
</head>
<body>
    <h1>Sorteio de Números</h1>
<?php

    function gerarNumeroAleatorio() {
        return rand(0, 50);
    }

    $tentativas = 0;

    do {
        $tentativas++;
        $numero = gerarNumeroAleatorio();
        echo "Número sorteado: $numero <br>";
    } while ($numero != 37);

    echo "<br>Foram necessárias $tentativas tentativas para sortear o número 37.";

    ?>
    <br><br><br>
    <a href="exercicio1.php">Gerar novo loop</a><br><br>
    <a href="listaexerc3.php">Voltar ao menu anterior</a><br><br>
    <a href="../index.php">Voltar ao menu principal</a><br><br>
</body>
</html>