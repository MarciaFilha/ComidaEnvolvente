<?php 
    require_once 'conectarbanco.php';

    $nomeCompleto = $_POST["nomeCompleto"]; 
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"]; 
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //monta sql para o banco de dados ,
    $sql = "INSERT INTO usuarios (nome, telefone, endereco, email, senha) VALUES ('".$nomeCompleto."','".$telefone."','".$endereco."','".$email."','".$senha."')";

    $mysqli -> query($sql);
    $mysqli -> close();

	header('Location: login2.php');

?>

