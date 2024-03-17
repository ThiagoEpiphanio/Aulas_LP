<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notas da Competição de Ginástica</title>
</head>
<body>

	<form action="calcularNota.php" method="post">
        <label>Digite a nota da partida</label><br>
        <input type="number" name="notaPartida" id="notaPartida" required> <br><br>

        <label>Digite a nota do primeiro juiz</label><br>
        <input type="number" name="txtNotaJuiz1" id="NotaJuiz1" required> <br><br>

        <label>Digite a nota do segundo juiz</label><br>
        <input type="number" name="txtNotaJuiz2" id="NotaJuiz2" required> <br><br>

        <label>Digite a nota do terceiro juiz</label><br>
        <input type="number" name="txtNotaJuiz3" id="NotaJuiz3" required> <br><br>

        <label>Digite a nota do quarto juiz</label><br>
        <input type="number" name="txtNotaJuiz4" id="NotaJuiz4" required> <br><br>

        <label>Digite a nota do quinto juiz</label><br>
        <input type="number" name="txtNotaJuiz5" id="NotaJuiz5" required> <br><br>

        <input type="submit" name="btnVerifica" id="btnVerifica" value="Calcular Nota Final">     

</body>

<br><br>
<a href="listaexerc.php"> Voltar ao menu de exercícios</a><br><br>
<a href="../index.php"> Voltar ao menu principal</a>

</html>