<?php 
if(!isset($_SESSION)){ 
	session_start(); 
} 
	require_once 'querylojas.php';?>
<html>
	<head>
		<title>Home</title>
		<?php require_once 'LinksBootstrap.php'?>
	</head>
	<style>
	body {
		background-color: black;
	}
	.container{
		background-color: white;
		/* tamanho */
		position: relative;	
		width: 100%; 
		padding: 60; 
		border: 100%;
		border-width: 100;
	}
	</style>
	<body>
		<div class="container my-4">
			<ul class="list-group">
<?php 
for ($a = 0; $a < $rows_lojas; ++$a){
	$row_loja = $lojas->fetch_array(MYSQLI_NUM);
	$id_loja = htmlspecialchars($row_loja[0]);
	$nome = htmlspecialchars($row_loja[1]);	
	$segmento = htmlspecialchars($row_loja[3]);
	//$status = htmlspecialchars($row_loja[6]);
?>
				<!-- Vai repetir o item de acondo com a quantidades de lojas cadastradas do usuario -->
				<li class="list-group-item">
					<div class="row">
						<div class="col-sm-3">
							<h5><?php echo $nome; ?></h5>
						</div>
						<div class="col-sm-6">
							<h5><?php echo $segmento; ?></h5>
						</div>
						<div class="col-sm-3">
							<form action="perfilloja.php" method="POST">
								<center>
									<input type="hidden" name="id_loja" value="<?php echo $id_loja;?>">
									<input type= "submit" class="btn btn-dark" value="Mais sobre">
								</center>
							</form>
						</div>
					</div>	
				</li>
				<!-- Termina a repetição -->	
<?php 
}
?>						
			</ul>
			<br>
			<div class="row">
				<div class="col-sm-6">
					<form action="cadastroloja.php">
						<button style="border-radius: 60px 60px 60px 60px;" class="btn btn-dark">+</button>
					</form>
				</div>
				<div class="col-sm-6">
					<form action="atualizocadastro.php">
						<button  class="btn btn-dark" style="border-radius: 60px 60px 60px 60px;" >Atualizar cadastro</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>