<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_agenda";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verifica se o ID do contato foi passado pela URL
if (!isset($_GET['id'])) {
    header("Location: lista_contatos.php");
}

// Obtém os dados do contato
$id = $_GET['id'];
$sql = "SELECT * FROM lista_telefonica WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: lista_contatos.php");
}

$row = mysqli_fetch_assoc($result);

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Atualiza os dados do contato no banco de dados
    $sql = "UPDATE lista_telefonica SET nome='$nome', telefone='$telefone', email='$email' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
      mysqli_close($conn);
      header("Location: index.php");
      exit;
    } else {
      echo "Erro ao excluir contato: " . mysqli_error($conn);
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>

    <style>
        /* Estilos para o cabeçalho */
h1 {
  font-size: 32px;
  text-align: center;
  margin-top: 20px;
}

/* Estilos para o formulário */
form {
  width: 50%;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"] {
  padding: 10px;
  font-size: 16px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

a {
  color: #4CAF50;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

    </style>

</head>
<body>
    <h1>Editar Contato</h1>

    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $row['telefone']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"><br><br>

        <input type="submit" value="Salvar">
        <a href="lista_contatos.php">Cancelar</a>
    </form>
</body>
</html>

