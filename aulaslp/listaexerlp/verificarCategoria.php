<?php

        $datanasc = $_POST['anonasc'];

        $categoria = (2023 - $datanasc);

        if ($categoria<=7)
        {
            echo"O atleta tem $categoria anos. Categoria Sub-7";    
        }
        else if ($categoria<=9)
        {
            echo "O atleta tem $categoria anos. Categoria Sub-9";
        }
        else if ($categoria<=11)
        {
            echo "O atleta tem $categoria anos. Categoria Sub-11";
        }
        else if ($categoria<=13)
        {
            echo "O atleta tem $categoria anos. Categoria Sub-13";
        }
        else if ($categoria<=15)
        {
            echo "O atleta tem $categoria anos. Categoria Sub-15";
        }
        else if ($categoria<=17)
        {
            echo "O atleta tem $categoria anos. Categoria Sub-17";
        }
        else if ($categoria<=20)
        {
            echo "O atleta tem $categoria anos. Categoria Sub-20";
        }
        else
        {
            echo "O atleta tem $categoria anos. Categoria acima das permitidas";
        }
?>

<br><br>
<a href="categorias.php"> Nova verificação</a><br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>