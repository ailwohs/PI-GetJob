<?php
session_start();
$_SESSION['nome']="";
$_SESSION['administrador']="";

$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');

if(isset($_POST['enviar'])){

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $_SESSION['nome']=$nome;
    $_SESSION['administrador']=$senha;
    
    

    $pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');

}




?>