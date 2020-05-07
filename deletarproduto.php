<?php
	require_once "loginbd.php";

	$id_produto = $_POST['id_produto'];
	$id_loja = $_POST['id_loja'];
    
	$excluir_2 = "delete from ctegorias_produtos where produtos_id = '$id_produto';";
	$excluir2 = $conn->query($excluir_2);
	if (!$excluir_2) die ("Database access failed: excluir_produto");

	$excluir_produto = "delete from PRODUTOS where id = '$id_produto';";
	$excluir_prod = $conn->query($excluir_produto);
	if (!$excluir_produto) die ("Database access failed: excluir_produto");
    
	require_once 'perfilloja.php';
    
?>