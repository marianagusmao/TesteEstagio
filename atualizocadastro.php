<html>
	<head>
		<title>Novo Cadastro Usuário</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<style>
	</style>
	<body>
		<div class="container my-5">
			<h3>Novo cadastro Usuário</h3>
			<hr><br>
			<form action="atualizarcadastro.php" method="POST">
				<p><h5>Nome</h5></p>
				<input class="form-control" type="text" placeholder="Nome" id="nome" name="nome"><br>
				<p><h5>Email</h5></p>
				<input class="form-control" type="email" placeholder="Email" id="email" name="email"><br>
				<p><h5>Senha</h5></p>
				<input class="form-control" type="password" placeholder="Senha" id="senha" name="senha"><br>
				<p><h5>Conferir senha</h5></p>
				<input class="form-control" type="password" placeholder="Senha" id="senha_conferida" name="senha_conferida"><br>	
				<br><button type= "submit" class="btn btn-dark">Atualizar</button>
			</form>
		</div>					
	</body>
</html>