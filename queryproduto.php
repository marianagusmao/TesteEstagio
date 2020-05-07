<?php
require_once 'loginbd.php';

$select_produtos = "select * from PRODUTOS where loja_id = '$id_loja';";
$produtos = $conn->query($select_produtos);
if (!$produtos) die ("Database access failed (select_produtos)");

$rows_produtos = $produtos->num_rows;

?>