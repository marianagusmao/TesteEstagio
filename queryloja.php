<?php
require_once 'loginbd.php';

$select_loja = "select * from LOJAS where id = '$id_loja'";
$loja = $conn->query($select_loja);
if (!$loja) die ("Database access failed (select_loja)");

$row_loja = mysqli_fetch_array($loja);
$nome_loja = $row_loja['nome'];
$descricao_loja = $row_loja['descricao'];
$segmento_loja = $row_loja['segmento'];
$telefone_loja = $row_loja['telefone'];
$celular_loja = $row_loja['celular'];
?>