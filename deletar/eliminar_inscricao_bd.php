<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'C_E_S');

$query = "Delete from inscricoes where id=$_GET[id]";

mysqli_query($conexao, $query);

header("location: ../inscricao_listagem.php");
?>