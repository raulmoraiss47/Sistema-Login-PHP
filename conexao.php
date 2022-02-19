<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";

$conexao = mysqli_connect ($servidor, $usuario, $senha, $banco) or die;

if (!mysqli_set_charset($conexao, 'utf8')) {
    echo "erro ao inserir o padrão utf-8";
}


?>