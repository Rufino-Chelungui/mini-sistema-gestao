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

$query = "SELECT formandos.*, inscricoes.nome, niveis.nivel as nivel from formandos 
join inscricoes on formandos.id_inscricoes=inscricoes.id
join niveis on formandos.id_nivel=niveis.id ORDER BY `id` DESC";

$formandos = mysqli_query($conexao, $query);
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

	<title>Listagem de formandos | C.E.S</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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
									<h5 class="card-title mb-0">Listagem de formandos</h5>
								</div>
								<div id="action-table" class="mb-3">
									<input type="search" name="search" class="form-control" placeholder="Pesquisar por nome...">
									<a href="formando_cadastro.php" class="btn btn-success"><i class="align-middle me-2" data-feather="plus-circle"></i> <span class="align-middle">Adicionar</span></a>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Formando</th>
											<th class="d-none d-md-table-cell">Periodo</th>
											<th class="d-none d-md-table-cell">Ano Lectivo</th>
											<th>Nível</th>
											<th>Ações</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($formando_vector =  mysqli_fetch_array($formandos)) { ?>
											<tr>
												<td><?php echo $formando_vector['nome'] ?></td>
												<td class="d-none d-md-table-cell"><?php echo $formando_vector['periodo'] ?></td>
												<td class="d-none d-md-table-cell"><?php echo $formando_vector['ano_lectivo'] ?></td>
												<td><?php echo $formando_vector['nivel'] ?></td>
												<td>
													<a href="" class="btn btn-primary"><i class="align-middle me-2" data-feather="edit"></i> <span class="align-middle">Editar</a>

													<a href="deletar/eliminar_formando_bd.php?id=<?php echo $formando_vector['id']; ?>" class="btn btn-danger"><i class="align-middle me-2" data-feather="trash-2"></i> <span class="align-middle">Deletar</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
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