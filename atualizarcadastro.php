<?php 
require_once 'loginbd.php';
require_once 'queryidusu.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_conferir = $_POST['senha_conferida'];

if (isset($nome)){
	$update_usuario = "update USUARIO set nome = '$nome' where id = '$id_usu';";
	$update_n = mysqli_query($conn, $update_usuario);
	if (!$conn) die("Connection failed: update_usuario");
	require_once 'home.php';
}
else if (isset($email)){
	$update_email = "update USUARIO set email = '$email' where id = '$id_usu';";
	$update_e = mysqli_query($conn, $update_email);
	if (!$conn) die("Connection failed: update_email");
	require_once 'home.php';
}
else if (isset($senha) && isset($senha_conferir)){
	if($senha === $senha_conferir){
		$senha_crip = md5($senha_conferir);
		$update_usuario = "update USUARIO set senha = '$senha_crip' where id = '$id_usu';";
		$update = mysqli_query($conn, $update_usuario);
		if (!$conn) die("Connection failed: update_usuario");
		require_once 'home.php';
	}
	else{
		echo "<html><center><br><button class='btn btn-warning' disabled>Senhas diferentes</button></center></html>";
		require_once 'atualizarcadastro.php';
	}
}
else{
	echo "<html><center><br><button class='btn btn-warning' disabled>Nenhuma atualização!</button></center></html>";
	require_once 'home.php';
}

?>