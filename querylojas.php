<?php
if(!isset($_SESSION)){ 
	session_start(); 
} 
require_once 'loginbd.php';
require_once 'queryidusu.php';

$select_lojas = "select * from LOJAS where usuario_id = '$id_usu';";
$lojas = $conn->query($select_lojas);
if (!$lojas) die ("Database access failed (select_lojas)");

$rows_lojas = $lojas->num_rows;

//$row_loja = mysqli_fetch_array($lojas);
//$nome = $row_loja['nome'];
//$descricao = $row_loja['descricao'];
//$segmento = $row_loja['segmento'];
//$telefone = $row_loja['telefone'];
//$celular = $row_loja['celular'];

?>