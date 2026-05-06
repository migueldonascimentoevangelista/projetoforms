<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Projeto IMC</h1>

	<form action="imc.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"
		maxlength="50" autofocus>
		<label for="peso">Peso:</label>
		<input type="number" step="any" name="peso" id="peso"
		maxlength="5" required>
		<label for="altura">Altura:</label>
		<input type="number" step="any" name="altura" id="altura"
		maxlength="5" required>
		<input type="submit" name="Calcular" id="calcular">
		<input type="reset" name="Limpar" id="limpar">
	</form>
</body>
</html>