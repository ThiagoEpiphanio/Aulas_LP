<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado de vendas</title>
</head>
<body>

   <form action="calcularResultado.php" method="post">
        <label>Digite o custo para produção do produto</label><br>
        <input type="number" name="txtCusto" id="txtCusto" required> <br><br>

        <label>Digite o preço de venda do produto</label><br>
        <input type="number" name="txtPrecoVenda" id="txtPrecoVenda" required> <br><br>

        <label>Digite a quantidade vendida do produto</label><br>
        <input type="number" name="txtQtdeVendida" id="txtQtdeVendida" required> <br><br>


        <input type="submit" name="btnVerifica" id="btnVerifica" value="Calcular"><br>
   
    </form>

</body>

<br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>


</html>