<html>
	<head>
		<title>Cadastro Loja</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<style>
	</style>
	<body>
		<div class="container my-5">
			<h3>Cadastro Loja</h3>
			<hr><br>
			<form action="cadastrarloja.php" method="POST">
				<p><h5>Nome</h5></p>
				<input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required ><br>
				<p><h5>Descrição</h5></p>
				<textarea class="form-control" placeholder="Descrição" id="descricao" name="descricao" required ></textarea><br>
				<p><h5>Segmento</h5></p>
				<input class="form-control" type="text" placeholder="Segmento" id="segmento" name="segmento" required ><br>
				<p><h5>Telefonte</h5></p>
				<input class="form-control" type="text" placeholder="Telefonte" id="telefone" name="telefone" required ><br>	
				<p><h5>Celular</h5></p>
				<input class="form-control" type="text" placeholder="( )00000-000" id="celular" name="celular"required ><br>	
				<br><button type= "submit" class="btn btn-dark">Cadastrar</button>
				<!-- Add no banco se não existir-->
			</form>
		</div>					
	</body>
</html>