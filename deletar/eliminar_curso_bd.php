<?php
$conexao = mysqli_connect('localhost', 'root', '', 'C_E_S');

$query = "Delete from niveis where id=$_GET[id]";

mysqli_query($conexao, $query);

header("location: ../curso_listagem.php");
?>