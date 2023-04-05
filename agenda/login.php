<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style>
	body {
		background-color: #f2f2f2;
		font-family: Arial, sans-serif;
	}

	h2 {
		text-align: center;
		margin-top: 50px;
	}

	form {
		width: 300px;
		margin: 0 auto;
		background-color: #fff;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
	}

	label {
		display: block;
		margin-bottom: 10px;
	}

	input[type="text"], input[type="password"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 5px;
		border: none;
		box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
	}

	input[type="submit"] {
		background-color: #4CAF50;
		color: #fff;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #3e8e41;
	}
</style>

</head>
<body>
	<h2>Faça login para acessar a sua agenda</h2>
	<form action="autenticar.php" method="POST">
		<label for="usuario">Usuário:</label>
		<input type="text" id="usuario" name="usuario" required><br><br>
		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required><br><br>
		
		<input type="submit" value="Entrar">
	</form>
</body>
</html>
