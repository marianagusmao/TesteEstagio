<?php
	session_start();
	require_once 'loginbd.php';

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha_confere = $_POST['senha_conferida'];

	$confere_email = "select * from USUARIO where email = '$email'";
	$confere_e = $conn->query($confere_email);
	if (!$conn) die ("Conection failed: confere_email");

	$rows_email = $confere_e->num_rows;

	if ($rows_email == 0){
		echo "<html><center><br><button class='btn btn-warning' disabled>Email incorreto ou não cadastrado!</button></center></html>";
		require_once 'esquecisenha.php';
	}
	else if ($rows_email > 0){
		if ($senha === $senha_confere){
			$senha_crip = md5($senha_confere);
			$update_senha = "update USUARIO set senha = '$senha_crip' where email = '$email';";
			$uodate = $conn->query($update_senha);
			if (!$conn) die ("Conection failed: senha nova");
			$_SESSION['logado'] = 1;
			$_SESSION['email'] = $email;
			require_once 'home.php';
		}
		else{
			echo "<html><center><br><button class='btn btn-warning' disabled>Senha diferentes!</button></center></html>";
			require_once 'esquecisenha.php';
		}
	}
?>