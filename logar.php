<?php 
	session_start();
	require_once 'loginbd.php';

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$senha_crip = md5($senha);

	$confere_email = "select * from USUARIO where email = '$email';";
	$confere_e = $conn->query($confere_email);
	if (!$conn) die ("Connection failed: select_email");

	$confere_senha = "select * from USUARIO where senha = '$senha_crip';";
	$confere_s = $conn->query($confere_senha);
	if (!$conn) die ("Connection failed: select_senha");

	$row_email = mysqli_fetch_array($confere_e);
	$status = $row_email['status'];

	$rows_email = $confere_e->num_rows;
	$rows_senha = $confere_s->num_rows;

	if ($rows_senha == 0 && $rows_email == 0){		
		$_SESSION['logado'] = 0;
?>
		<center><br>
			<form action="cadastrousuario.php">
				<button class='btn btn-warning'>Usuario não cadastrado! Cadastre-se aqui</button>
			</form>
		</center>
<?php
		require_once 'login.php';
	}
	if ($rows_email > 0 && $rows_senha > 0 && $status = 'A'){
		$_SESSION['logado'] = 1;
		$_SESSION['email'] = $email;
		require_once 'home.php';
	}
	else{
		$_SESSION['logado'] = 0;
		echo "<html><center><br><button class='btn btn-warning' disabled>Email ou senha incorretos!</button></center></html>";
		require_once'login.php';
	}
	
?>