<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_agenda";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recupera os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

// Prepara a query SQL para inserir o novo contato
$sql = "INSERT INTO lista_telefonica (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

// Executa a query SQL
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: index.php");
    exit;
  } else {
    echo "Erro ao excluir contato: " . mysqli_error($conn);
  }
  

// Fecha a conexão com o banco de dados
$conn->close();
?>
