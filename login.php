<html>
	<head>
		<title>Login</title>
		<?php require_once 'LinksBootstrap.php'?>
		<link rel="stylesheet" href="style2.css"  type="text/css">
	</head>
	<body>
		<div class="container my-5">
			<h3>Login</h3>
			<hr><br>
			<form action="logar.php" method="POST">
				<p><h5>Email</h5></p>
				<input class="form-control" type="email" placeholder="Email" id="email" name="email" required >
				<br>
				<p><h5>Senha</h5></p>	
				<input class="form-control" type="password" placeholder="Senha" id="senha" name="senha" required >
				<br><br>
				<button type= "submit" class="btn btn-dark ">Entrar</button>			
			</form>	
			<a class="btn btn-warning btn-c" href="cadastrousuario.php">Criar conta</a>
			<br><br>
			<a href="esquecisenha.php"> Esqueci minha senha</a>
		</div>
	</body>
</html>