<?php 
if(!isset($_SESSION)){ 
	session_start(); 
} 
require_once 'loginbd.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$segmento = $_POST['segmento'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$email_usu = $_SESSION['email'];

if (isset($nome) && isset($descricao) && isset($segmento) && isset($telefone) && isset($celular)){
	if ($_SESSION ['logado'] == 1){
		$select_id_usu = "select id from USUARIO where email = '$email_usu';";
		$id_usu = $conn->query($select_id_usu);
		
		$row_usu = mysqli_fetch_array($id_usu);
		$id_usu = $row_usu['id'];

		$insert_loja = "insert into LOJAS (nome, descricao, segmento, telefone, celular, status, usuario_id)".
		"values ('$nome', '$descricao', '$segmento', '$telefone', '$celular', 'A', '$id_usu');";
		$insert = mysqli_query($conn, $insert_loja);

		if (!$conn)	die ("Connection failed: insert loja");

		require_once 'home.php';		
	}
	else{
		echo "<html><center><br><button class='btn btn-warning' disabled>Para executar essa ação deve estar logado!</button></center></html>";
		require_once 'login.php';
	}
}
else{
	echo "<html><center><br><button class='btn btn-warning' disabled>Algum campo não foi preenchido!</button></center></html>";
	require_once 'cadastroloja.php';
}

?>