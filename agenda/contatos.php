<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "rafael";
$password = "1234";
$dbname = "db_agenda";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta SQL para recuperar os contatos
$sql = "SELECT id, nome, sobrenome, telefone, email FROM contatos";
$result = $conn->query($sql);

// Verificar se a consulta retornou resultados
if ($result->num_rows > 0) {
    // Exibir a tabela de contatos
    echo "<table>";
    echo "<tr><th>Nome</th><th>Sobrenome</th><th>Telefone</th><th>Email</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["sobrenome"] . "</td>";
        echo "<td>" . $row["telefone"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td><a href='editar_contato.php?id=" . $row["id"] . "'>Editar</a> | <a href='excluir_contato.php?id=" . $row["id"] . "'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum contato encontrado.";
}

$conn->close();
?>
