<?php
session_start();

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'C_E_S';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/*if($conexao->connect_errno){
    echo "ERRO";
}else{
    echo "CONEXÂO EFETUADA COM SUCESSO";
}*/

?>