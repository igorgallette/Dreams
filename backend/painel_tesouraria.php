<?php
session_start();
include('verificar_login.php');

if($_SESSION['cargo_usuario'] != "Boss"  && $_SESSION['cargo_usuario'] != 'gerente' && $_SESSION['cargo_usuario'] != 'tesoureiro' ){
    header('Location:index.php');
}

?>


painel aqui
<h> Usuario : <?php echo $_SESSION['nome_usuario'] ?> </h>
<h> Cargo : <?php echo $_SESSION['cargo_usuario'] ?> </h>
<a href="logout.php">sair </a>