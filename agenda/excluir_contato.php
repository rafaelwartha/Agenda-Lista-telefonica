<?php
// Verifica se o ID do contato foi passado como parâmetro
if (!isset($_GET['id'])) {
  echo "ID do contato não informado.";
  exit;
}

// Obtém o ID do contato a ser excluído
$id = $_GET['id'];

// Conecta-se ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_agenda";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

// Exclui o contato do banco de dados
$sql = "DELETE FROM lista_telefonica WHERE id = $id";
if (mysqli_query($conn, $sql)) {
  mysqli_close($conn);
  header("Location: index.php");
  exit;
} else {
  echo "Erro ao excluir contato: " . mysqli_error($conn);
}


// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
