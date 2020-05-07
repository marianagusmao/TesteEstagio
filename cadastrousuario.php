<html>
	<head>
		<title>Cadastro Usuário</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<style>
	</style>
	<body>
		<div class="container my-5">
			<h3>Cadastro Usuário</h3>
			<hr><br>
			<form action="cadastrarusuario.php" method="POST">
				<p><h5>Nome</h5></p>
				<input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required ><br>
				<p><h5>Email</h5></p>
				<input class="form-control" type="email" placeholder="Email" id="email" name="email" required ><br>
				<p><h5>Senha</h5></p>
				<input class="form-control" type="password" placeholder="Senha" id="senha" name="senha"required ><br>
				<p><h5>Conferir senha</h5></p>
				<input class="form-control" type="password" placeholder="Senha" id="senha_conferida" name="senha_conferida"required ><br>	
				<br><button type= "submit" class="btn btn-dark">Cadastrar</button>
				<!-- Add no banco e enviar o email por $_SESSION -->
			</form>
		</div>					
	</body>
</html>