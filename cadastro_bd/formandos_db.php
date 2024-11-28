<?php
$conexao = mysqli_connect(
    'localhost',
    'root',
    '',
    'C_E_S'
);

$query = "Insert into formandos
values('default',
'$_POST[periodo]',
'$_POST[ano_lectivo]',
'$_POST[id_inscricoes]',
'$_POST[id_nivel]'
)";

mysqli_query($conexao, $query);

header('Location: ../formando_listagem.php');
