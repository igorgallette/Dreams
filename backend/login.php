<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha']) ){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_Escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_Escape_string($conexao,$_POST['senha']);
$query = "select * from usuarios where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query ($conexao, $query);
$usuario =  mysqli_fetch_array ($result);
$row = mysqli_num_rows ($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome_usuario'] = $usuario["nome"];
    $_SESSION['cargo_usuario'] = $usuario["cargo"];
        if($_SESSION['cargo_usuario'] =='Boss' || $_SESSION['cargo_usuario'] == 'gerente'){
           header('Location: painel_admin.php');
           exit();
        }
        if($_SESSION['cargo_usuario'] =='tesoureiro'){
            header('Location: painel_tesouraria.php');
            exit();
         }
            header('Location: painel_funcionario.php');
            exit();


} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
    
}


?>