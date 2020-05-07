<?php 
	if(!isset($_SESSION)){ 
		session_start(); 
	} 		
	$id_loja = $_POST['id_loja'];
	require_once 'queryproduto.php';
	require_once 'queryloja.php';
?>
<html>
	<head>
		<title>Perfil da Loja</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<style>
	.container-descricao{
		background-color: white;
		/* tamanho */
		position: relative;	
		width: 99%; 
		padding: 120; 
	}
	</style>
	<body>
		<div class="container-descricao my-4">
			<center><h2><?php echo $nome_loja; ?></h2></center>
			<hr><br>
			<div class="row">
				<div class="col-sm-4">
					<center><h4>Descrição</h4></center><br>
					<center><p><h6><?php echo $descricao_loja; ?></h6></p></center>
				</div>
				<div class="col-sm-4">
					<center><h4>Segmento</h4></center><br>
					<center><p><h6><?php echo $segmento_loja; ?></h6></p></center>
				</div>
				<div class="col-sm-4">
					<div class="col-sm-6">
						<center><h4>Contato</h4></center><br>
						<center><p><h6><?php echo $celular_loja; ?></h6></p></center>
					</div>
					<div class="col-sm-6">
						<center><p><h6><?php echo $telefone_loja; ?></h6></p></center>
					</div>
				</div>
			</div>			
		</div>
		<div class="row">	
			<!-- Repetição de acordo com os produtos cadastrados -->
<?php 
		if ($rows_produtos == 0){
?>
		<div class="alert alert-warning">
			<center>Essa loja não possui produtos cadastrados!</center>
		</div>
<?php
		}
		//else{
			for ($a = 0; $a < $rows_produtos; ++$a){
				$row_produto = $produtos->fetch_array(MYSQLI_NUM);
				$id_produto = htmlspecialchars($row_produto[0]);
				$nome_produto = htmlspecialchars($row_produto[1]);
				$descricao_produto = htmlspecialchars($row_produto[2]);
				$preco_produto = htmlspecialchars($row_produto[3]);
				//$status_produto = htmlspecialchars($row_produto[4]);			
?>
			<div class="col-sm-3">
				<div class="container my-3">
					<center>
						<div class="row">
							<div class="col-sm-12">
								<img src="">*imagem*
							</div>
							<div class="col-sm-12">
								<br><?php echo $nome_produto; ?>
							</div>
							<div class="col-sm-12">
								<br><?php echo $preco_produto; ?> 
							</div>
							<div class="col-sm-12">
								<br><?php// echo $categoria; ?> 
							</div>
							<div class="col-sm-12">
								<form action="deletarproduto.php" method="POST">
									<br>
									<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
									<input type="hidden" name="id_loja" value="<?php echo $id_loja; ?>">
									<button  type="submit" class="btn btn-warning">Deletar produto</a>
								</form>
								<!-- Eviar id/nome do produto -->
							</div>
						</div>
					</center>	
				</div>	
			</div>
			<!-- Fim da repetição -->	
<?php 
	}
//}
?>
		</div>	
		<form action="cadastroproduto.php" method="POST">
			<input type="hidden" name="id_loja" value="<?php echo $id_loja; ?>">
			<button style="border-radius: 60px 60px 60px 60px;" class="btn btn-light"><b>+</b></button>
			<!-- Enviar o id da loja e usuario -->
		</form>	
	</body>
</html>