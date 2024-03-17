<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calcular Salário</title>
</head>
<body>

   <form action="calculoSalario.php" method="post">
        <label>Digite o Salário</label><br>
        <input type="number" name="txtSalario_bruto" id="txtSalario_bruto" required> <br><br>

        <label>Digite os Descontos</label><br>
        <input type="number" name="txtDescontos" id="txtDescontos" required> <br><br>

        <input type="submit" name="btnVerifica" id="btnVerifica" value="Verificar">
   
    </form>

</body>

<br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>

</html>