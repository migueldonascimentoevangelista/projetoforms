<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link>
	<title></title>
</head>
<body>
	<h1>Formulário PHP</h1>

	<form action="valida.php" method="post">
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email"
		maxlength="50" required autocomplete="off" autofocus>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha"
		maxlength="15" required autocomplete="off">
		<input type="submit" name="entrar" id="Entrar">
		<input type="reset" name="limpar" id="Limpar">
	</form>
	<script src="js/script.js"></script>
</body>
</html>