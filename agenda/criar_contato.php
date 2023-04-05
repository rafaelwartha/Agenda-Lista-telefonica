<!DOCTYPE html>
<html>
<head>
	<title>Criar Contato</title>

	<style>

body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

h2 {
  margin-top: 30px;
  text-align: center;
}

form {
  margin: 0 auto;
  width: 400px;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

input[type="submit"] {
  display: block;
  background-color: #4CAF50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 20px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}


	</style>

</head>
<body>
	<h2>Criar Contato</h2>
	<form action="processar_criar_contato.php" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required><br><br>
		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="telefone">Telefone:</label>
		<input type="tel" id="telefone" name="telefone"><br><br>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>
