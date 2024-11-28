<?php
$conexao = mysqli_connect(
    'localhost',
    'root',
    '',
    'C_E_S'
);

$query = "Insert into inscricoes
values('default',
'$_POST[nome]',
'$_POST[bi]',
'$_POST[genero]',
'$_POST[dt_nascimento]',
'$_POST[telefone]',
'$_POST[dt_inscricao]',
'$_POST[id_nivel]'
)";

mysqli_query($conexao, $query);

header('Location: ../inscricao_listagem.php');
