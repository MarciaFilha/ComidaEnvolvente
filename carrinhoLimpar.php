<?php
  session_start();
  $_SESSION['carrinho'] = [];

  header("Location: cardapio.php");