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

$queryFormandos = "SELECT formandos.*, inscricoes.nome, niveis.nivel as nivel from formandos 
join inscricoes on formandos.id_inscricoes=inscricoes.id
join niveis on formandos.id_nivel=niveis.id ORDER BY `id` DESC";
$formandos = mysqli_query($conexao, $queryFormandos);

$queryInscricoes = "select inscricoes.*, niveis.nivel as nivel from inscricoes
join niveis on inscricoes.id_nivel=niveis.id ORDER BY `id` DESC";
$inscricoes = mysqli_query($conexao, $queryInscricoes);

$queryNiveis = "select*from niveis ORDER BY `id` DESC";
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

<link rel="canonical" href="https://demo-basic.adminkit.io/" />

<title>C.E.S-Sistema de Gestão</title>

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
		<div class="col-xl-6 col-xxl-5 d-flex">
			<div class="w-100">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col mt-0">
										<h5 class="card-title">Formandos</h5>
									</div>

									<div class="col-auto">
										<div class="stat text-primary">
											<i class="align-middle" data-feather="users"></i>
										</div>
									</div>
								</div>
								<h1 class="mt-1 mb-3">
									<?php
									echo mysqli_num_rows($formandos);
									?>
								</h1>
								<div class="mb-0">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>
										<?php
										echo mysqli_num_rows($formandos);
										?>
									</span>
									<span class="text-muted">Total de formandos</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col mt-0">
										<h5 class="card-title">Níveis</h5>
									</div>

									<div class="col-auto">
										<div class="stat text-primary">
											<i class="align-middle" data-feather="book"></i>
										</div>
									</div>
								</div>
								<h1 class="mt-1 mb-3">
									<?php
									echo mysqli_num_rows($niveis);
									?>
								</h1>
								<div class="mb-0">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>
										<?php
										echo mysqli_num_rows($niveis);
										?>
									</span>
									<span class="text-muted">Total de niveis disponíveis</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col mt-0">
										<h5 class="card-title">Inscritos</h5>
									</div>

									<div class="col-auto">
										<div class="stat text-primary">
											<i class="align-middle me-2" data-feather="book-open"></i>
										</div>
									</div>
								</div>
								<h1 class="mt-1 mb-3">
									<?php
									echo mysqli_num_rows($inscricoes);
									?>
								</h1>
								<div class="mb-0">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>
										<?php
										echo mysqli_num_rows($inscricoes);
										?>
									</span>
									<span class="text-muted">Total de inscritos</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-6 col-xxl-7">
			<div class="card flex-fill w-100">
				<div class="card-header">

					<h5 class="card-title mb-0">Recent Movement</h5>
				</div>
				<div class="card-body py-3">
					<div class="chart chart-sm">
						<canvas id="chartjs-dashboard-line"></canvas>
					</div>
				</div>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
var gradient = ctx.createLinearGradient(0, 0, 0, 225);
gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
// Line chart
new Chart(document.getElementById("chartjs-dashboard-line"), {
type: "line",
data: {
	labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
	datasets: [{
		label: "Sales ($)",
		fill: true,
		backgroundColor: gradient,
		borderColor: window.theme.primary,
		data: [
			2115,
			1562,
			1584,
			1892,
			1587,
			1923,
			2566,
			2448,
			2805,
			3438,
			2917,
			3327
		]
	}]
},
options: {
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	tooltips: {
		intersect: false
	},
	hover: {
		intersect: true
	},
	plugins: {
		filler: {
			propagate: false
		}
	},
	scales: {
		xAxes: [{
			reverse: true,
			gridLines: {
				color: "rgba(0,0,0,0.0)"
			}
		}],
		yAxes: [{
			ticks: {
				stepSize: 1000
			},
			display: true,
			borderDash: [3, 3],
			gridLines: {
				color: "rgba(0,0,0,0.0)"
			}
		}]
	}
}
});
});
</script>

</body>

</html>