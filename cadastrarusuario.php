<?php 
session_start();
require_once 'loginbd.php';

$logado = 0;

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_conferir = $_POST['senha_conferida'];

$select_usuarios = "select email from USUARIO;";
$select_usus = $conn->query($select_usuarios);

$result = 0;

$rows_usuarios = $select_usus->num_rows;


if (isset($nome) && isset($email) && isset($senha) && isset($senha_conferir)){
	if($senha == $senha_conferir){
		$senha_crip = md5($senha);
		$insert_usuario = "insert into USUARIO(nome, email, senha, status)".
		"values ('$nome', '$email', '$senha_crip', 'A');";
		$insert = mysqli_query($conn, $insert_usuario);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$_SESSION['logado'] = 1;
		$_SESSION['email'] = $email;
		require_once 'home.php';
	}
	else{
		echo "<html><center><br><button class='btn btn-warning' disabled>Senhas diferentes!</button></center></html>";
		require_once 'cadastrousuario.php';
	}
}


?>