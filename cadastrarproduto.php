<?php 
if(!isset($_SESSION)){ 
	session_start(); 
} 
require_once 'loginbd.php';

$id_loja = $_POST['id_loja'];

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$categoria = $_POST['categoria'];
$descricao_categoria = $_POST['descricao_categoria'];

if (isset($nome) && isset($descricao) && isset($preco) && isset($categoria) && isset($descricao_categoria)){$insert_categoria = "insert into CATEGORIAS (nome, descricao)".
	"values ('$categoria', '$descricao_categoria');";
	$categoria = mysqli_query($conn, $insert_categoria);
	if (!$conn)	die ("Connection failed: insert_categoria");

	$select_id_cat = "select id from CATEGORIAS where id = last_insert_id();";
	$id_cat = $conn->query($select_id_cat);
	if (!$conn) die ("Database access failed: select_id_cat");

	$row_cat = mysqli_fetch_array($id_cat);
	$id_cat = $row_cat['id'];

	$insert_produto = "insert into PRODUTOS(nome, descricao, preco, status, loja_id) values ('$nome','$descricao','$preco', 'A', '$id_loja');";
	$produto = mysqli_query($conn, $insert_produto);
	if (!$conn)	die ("Connection failed: insert produto");

	$select_id_prod = "select id from PRODUTOS where id = last_insert_id();";
	$id_prod = $conn->query($select_id_prod);
	if (!$conn) die ("Database access failed: select_id_prod");

	$row_prod = mysqli_fetch_array($id_prod);
	$id_prod = $row_prod['id'];

	$insert_2 = "insert into categorias_produtos (produtos_id, categorias_id)".
	"values ('$id_prod', '$id_cat');";
	$insert2 = mysqli_query($conn, $insert_2);
	if (!$conn)	die ("Connection failed: insert 2");

	$_SESSION['id_loja'] = $id_loja;
	require_once 'perfilloja.php';
}
else{
	echo "<html><center><br><button class='btn btn-warning' disabled>Algum campo não foi preenchido!</button></center></html>";
	require_once 'perfilloja.php';
}