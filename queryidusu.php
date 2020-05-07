<?php
	if(!isset($_SESSION)){ 
		session_start(); 
	} 
	$email_usu = $_SESSION['email'];

	$select_id_usu = "select id from USUARIO where email = '$email_usu';";
	$id_usu = $conn->query($select_id_usu);
	if (!$id_usu) die ("Database access failed (select_id_usu)");
	
	$row_usu = mysqli_fetch_array($id_usu);
	$id_usu = $row_usu['id'];

?>