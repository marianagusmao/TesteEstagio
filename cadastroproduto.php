<?php 
	if(!isset($_SESSION)){ 
		session_start(); 
	} 
	$id_loja = $_POST['id_loja'];
?>
<html>
	<head>
		<title>Cadastro Produto</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<style>
	</style>
	<body>
		<div class="container my-5">
			<h3>Cadastro Produto</h3>
			<hr><br>
			<form action="cadastrarproduto.php" method="POST">
				<p><h5>Nome</h5></p>
				<input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required ><br>
				<p><h5>Descrição do produto</h5></p>
				<textarea class="form-control" placeholder="Descrição" id="descricao" name="descricao" required ></textarea><br>
				<p><h5>Preço</h5></p>
				<input class="form-control" type="number" step="any" placeholder="Preço" id="preco" name="preco" required ><br>
				<p><h5>Categoria</h5></p>
				<!-- Cadastrar possíveis categorias no banco e pritar aqui -->
				<input class="form-control" type="select" placeholder="Escolher categoria" id="categoria" name="categoria" required ><br>	
				<p><h5>Descrição da categoria</h5></p>
				<textarea class="form-control" placeholder="Descrição" id="descricao_categoria" name="descricao_categoria" required ></textarea><br>
				<input type="hidden" name="id_loja" value="<?php echo $id_loja; ?>">
				<br><button type= "submit" class="btn btn-dark ">Adicionar</button>
				<!-- Add no banco se não existir-->
			</form>
		</div>					
	</body>
</html>