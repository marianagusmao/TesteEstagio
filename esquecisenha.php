<html>
	<head>
		<title>Esqueci senha</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<style>
	.container{
		background-color: white;
		padding-top: 60px;
		/* tamanho */
		position: relative;	
		width: 420; 
		padding: 60; 	}
	</style>
	<body>
		<div class="container my-5">
			<h3>Esqueci minha senha</h3>
			<hr><br>
			<form action="salvarsenha.php" method="POST" >
				<p><h5>Email</h5></p>
				<input class="form-control" type="email" placeholder="Email" id="email" name="email" required ><br>
				<p><h5>Nova senha</h5></p>
				<input class="form-control" type="password" placeholder="Senha" id="senha" name="senha" required ><br>
				<p><h5>Conferir senha</h5></p>
				<input class="form-control" type="password" placeholder="Senha" id="senha_conferida" name="senha_conferida" required ><br>	
				<br><button class="btn btn-dark ">Salvar</button>
				<!-- Add no banco se não existir-->
			</form>
		</div>					
	</body>
</html>