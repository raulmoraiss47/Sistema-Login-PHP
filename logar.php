<?php
if (isset($_POST['usuario']) && isset($_POST['senha'])){
    include "conexao.php";
    session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios where usuario = '$usuario' and senha = '$senha' ";

$resultado = mysqli_query($conexao, $sql);

$contaRegistros = mysqli_num_rows($resultado);

if($contaRegistros > 0){
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $_SESSION['id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['usuario'] = $dados['usuario'];
        $_SESSION['senha'] = $dados['senha'];
    }
    header("location: logado.php");
}else{    
    header("location: index.php");
}

}

?>