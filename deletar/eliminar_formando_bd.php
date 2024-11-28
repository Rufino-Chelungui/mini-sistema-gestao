<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'C_E_S');

$query = "Delete from formandos where id=$_GET[id]";

mysqli_query($conexao, $query);

header("location: ../formando_listagem.php");
?>