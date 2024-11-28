<?php

include('config.php');

//print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location: login.php');
}

$logado = $_SESSION['email'];

$sql = "SELECT * FROM adimins ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Cadastro de Nível | C.E.S</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">

		<!--Início da sidebar-->
		<?php include('./layouts/sidebar.php') ?>
		<!--Fim da sidebar-->

		<div class="main">

			<!--Início da navbar-->
			<?php include('./layouts/navbar.php') ?>
			<!--Fim da navbar-->

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>English School Sistema de Gestão</strong> </h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Cadastro de nível</h5>
								</div>
								<form action="./cadastro_bd/curso_db.php" method="POST">
									<div class="card-body">
										<label class="form-label">Seleciona o nível</label>
										<select name="nivel" class="form-select mb-3" required>
											<option value="Beginner" selected>Beginner</option>
											<option value="Elementary">Elementary</option>
											<option value="Intermediate">Intermediate</option>
											<option value="Advanced">Advanced</option>
										</select>
									</div>
									<div class="card-body">
										<label class="form-label">Seleciona o preço</label>
										<select name="preco" class="form-select mb-3" required>
											<option value="1500" selected>1.500 kz</option>
											<option value="1700">1.700 kz</option>
											<option value="2000">2.000 kz</option>
											<option value="2500">2.500 kz</option>
										</select>
									</div>
									<div class="card-body">
										<button class="btn btn-success">Cadastrar</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</main>

			<!--Início da footer-->
			<?php include('./layouts/footer.php') ?>
			<!--Fim da footer-->

		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>