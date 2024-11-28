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

<?php

$conexao = mysqli_connect('localhost', 'root', '', 'C_E_S');

$queryInscricoes = "select*from inscricoes";
$inscricoes = mysqli_query($conexao, $queryInscricoes);

$queryNiveis = "select*from niveis";
$niveis = mysqli_query($conexao, $queryNiveis);

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

	<title>Cadastro de formandos | C.E.S</title>

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

					<h1 class="h3 mb-3"><strong>Sistema de Gestão</strong> C.E.S</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Cadastro de formandos</h5>
								</div>
								<form action="./cadastro_bd/formandos_db.php" method="POST">
									<div class="card-body">
										<label class="form-label">Seleciona o nome</label>
										<select name="id_inscricoes" class="form-select mb-3" required>
											<?php while ($inscrito_vector = mysqli_fetch_array($inscricoes)){  ?>
												<option value="<?php echo $inscrito_vector['id'] ?>" selected><?php echo $inscrito_vector['nome'] ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="card-body">
										<label class="form-label">Seleciona o periodo</label>
										<select name="periodo" class="form-select mb-3" required>
											<option value="Manhã">Manhã</option>
											<option value="Tarde">Tarde</option>
										</select>
									</div>
									<div class="card-body">
										<label class="form-label">Ano da inscrição</label>
										<input type="number" name="ano_lectivo" class="form-control" placeholder="Ano em que se inscreve" required>
									</div>
									<div class="card-body">
										<label class="form-label">Seleciona o nível</label>
										<select name="id_nivel" class="form-select mb-3" required>
											<?php while ($nivel_vector = mysqli_fetch_array($niveis)) {  ?>
												<option value="<?php echo $nivel_vector['id'] ?>" selected><?php echo $nivel_vector['nivel'] ?></option>
											<?php } ?>
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