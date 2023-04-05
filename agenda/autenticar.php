<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Recebe os dados do formulário
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	// Verifica se o usuário e a senha estão corretos
	if ($usuario == 'admin' && $senha == '123') {
		// Inicia a sessão
		session_start();
		// Armazena o nome de usuário na sessão
		$_SESSION['usuario'] = $usuario;
		// Redireciona para a página inicial
		header('Location: index.php');
		exit;
	} else {
		// Exibe uma mensagem de erro
		echo 'Usuário ou senha inválidos.';
	}
}
?>
