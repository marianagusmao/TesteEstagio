<?php
if(!isset($_SESSION)){ 
	session_start(); 
} 
require_once 'loginbd.php';

$email_usu = $_SESSION['email'];
echo $email_usu;

$select_id_usu = "select id from USUARIO where email = '$email_usu';";
$id_usu = $conn->query($select_id_usu);
if (!$id_usu) die ("Database access failed (select_id_usu)");

$row_usu = mysqli_fetch_array($id_usu);
$id_usu = $row_usu['id'];

$select_lojas = "select * from LOJAS where usuario_id = '$id_usu';";
$lojas = $conn->query($select_lojas);
if (!$lojas) die ("Database access failed (select_lojas)");

$rows_lojas = $lojas->num_rows;

$row_loja = mysqli_fetch_array($lojas);
$id_loja = $row_loja['id'];
$nome = $row_loja['nome'];
$descricao = $row_loja['descricao'];
$segmento = $row_loja['segmento'];
$telefone = $row_loja['telefone'];
$celular = $row_loja['celular'];
//for ($a = 0; $a < $rows_lojas; ++$a){
	//$row_loja = $lojas->fetch_array(MYSQLI_NUM);
	//$nome = htmlspecialchars($row_loja[1]);
	//$descricao = htmlspecialchars($row_loja[2]);	
	//$segmento = htmlspecialchars($row_loja[3]);
	//$telefone = htmlspecialchars($row_loja[4]);
	//$celular = htmlspecialchars($row_loja[5]);
	//$status = htmlspecialchars($row_loja[6]);
//}
?>