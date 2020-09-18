<?php
  session_start();

  // abre conexao com o banco 
  require_once 'conectarbanco.php';

  $email = $_POST["email"]; 
  $senha = $_POST["senha"]; 

  //monta sql para o banco de dados 
  $sql = "SELECT * FROM usuarios WHERE email = '".$email."' and senha = '".$senha."'";
  $query = mysqli_query($mysqli, $sql);
  $result = mysqli_fetch_row($query);

  if($result) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
  
    header("Location: cardapio.php");
  } else {
    header('Location: login2.php?login=erro');
  }

?>