<?php
$conexao = mysqli_connect(
	'localhost',
	'root',
	'',
	'C_E_S'
);

$query = "INSERT into niveis
values('default',
'$_POST[nivel]',
'$_POST[preco]'
)";

mysqli_query($conexao, $query);

header('Location: ../curso_listagem.php');
