<!DOCTYPE html>
<html>
<head>
	<title>Lista de Contatos</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		a {
			text-decoration: none;
			padding: 5px 10px;
			background-color: #4CAF50;
			color: white;
			border-radius: 3px;
		}

		a:hover {
			background-color: #3e8e41;
		}

		p {
			margin-top: 20px;
		}
	</style>
</head>
<body>

<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_agenda";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta os contatos na tabela 'contatos'
$sql = "SELECT * FROM lista_telefonica";
$result = $conn->query($sql);

// Cria a lista de contatos
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telefone"] . "</td>";
        echo "<td>";
        echo "<a href='editar_contato.php?id=" . $row["id"] . "'>Editar</a> ";
        echo "<a href='excluir_contato.php?id=" . $row["id"] . "' onclick='return confirm(\"Tem certeza que deseja excluir este contato?\")'>Excluir</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum contato encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

<p><a href="criar_contato.php">Criar novo contato</a></p>
<p><a href="logout.php">Logout</a></p>

</body>
</html>
