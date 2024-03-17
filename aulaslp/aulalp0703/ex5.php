<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="radio" value="fr" name="rdCidades">Franco da Rocha<br>
        <input type="radio" value="fm" name="rdCidades">Francisco Morato<br>
        <input type="radio" value="ca" name="rdCidades">Caieiras<br>
        <input type="radio" value="ma" name="rdCidades">Mairiporã<br>
        <br>
        <input type="radio" value="sp" name="rdEstados">SP<br>
        <input type="radio" value="mg" name="rdEstados">MG<br>

        <br>

        <select name="slCidades">
            <option>Escolha uma cidade</option>
            <option value="fr">Franco da Rocha</option>
            <option value="fm">Francisco Morato</option>
            <option value="ca">Caieiras</option>
            <option value="ma">Mairiporã</option>
        </select>
    <br>
    <input type="submit">

    </form>

    <?php

    $cidadeRd = $_POST['rdCidades'];
    $estadoRd = $_POST['rdEstados'];
    $cidadeSl = $_POST['slCidades'];

    if($cidadeRd=="fr")
    {
        echo"Você escolheu Franco da Rocha<br>";
    }
    else
    {
        echo"Você escolheu outra cidade<br>";
    }


    if($estadoRd=="sp")
    {
        echo"<br>Você escolheu São Paulo<br>";
    }
    else if ($estadoRd=="mg")
    {
        echo"<br>Você escolheu Minas Gerais<br>";
    }
    else
    {
        echo"<br>Você não escolheu nenhum estado<br>";
    }

    if($cidadeSl=="fr")
    {
        echo"<br>Você escolheu Franco da Rocha<br>";
    }
    else if ($cidadeSl=="fm")
    {
        echo"<br>Você escolheu Francisco Morato<br>";
    }
    else if ($cidadeSl=="ca")
    {
        echo"<br>Você escolheu Caieiras<br>";
    }
    else if ($cidadeSl=="ma")
    {
        echo"<br>Você escolheu Mairiporã<br>";
    }
    else
    {
        echo"<br>Você não escolheu nenhuma cidade<br>";
    }

    if($cidadeRd=="fr" && $estadoRd=="sp")
    {
        echo"<br>Você escolheu Franco da Rocha e o estado de São Paulo"; 
    }
    else if ($cidadeRd=="fr" && $estadoRd=="mg")
    {
        echo"<br>Você escolheu Franco da Rocha e o estado de Minas Gerais"; 
    }

    ?>
    
    <a href="aula0703.php">Voltar para ao anterior</a><br><br>
    <a href="../index.php">Voltar ao menu principal</a><br>
    
</body>
</html>