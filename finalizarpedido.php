<?php
  session_start();
  include "conectarbanco.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Finalizar Pedido</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </head>
<body>

	<div class="container">
		<h2>
       Finalizar Pedido
     </h2>

     <hr>
     <h3 class="text-primary">Valor total da compra:</h3>

     <?php

        $carrinho = $_SESSION['carrinho'];
        $total = 0;

        foreach ($carrinho as $key => $value) {
          $total += (float)$value['preco']* $value['qtd'];
        }

        echo '<span class="display-4">R$ '.$total.'</span>';

    ?>

    <hr>

     <h3 class="text-primary">Entregar nesse Endereço:</h3>
     <?php
        $emailUsuarioLogado = $_SESSION['email'];

        // pegar endereço do usuário
        $sql_endereco = "SELECT * FROM usuarios WHERE email = '$emailUsuarioLogado'";
        $query_endereco = mysqli_query($mysqli, $sql_endereco);

        while ($row = mysqli_fetch_assoc($query_endereco)) {
          echo '<strong>'.$row['nome'].'</strong>';
          echo '<p>'.$row['endereco'].'</p>';
        }
     ?>

      <form action="final.php">
      <h3 class="text-primary">Formas de pagamento</h3>
      <h4 class="text-uppercase">Pagar na entrega</h4>
      <div class="custom-control custom-radio">
        <input required onchange="document.getElementById('formCartao').style.display='none'" type="radio" id="entrega_dinheiro" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="entrega_dinheiro">Dinheiro</label>
      </div>

      <div class="custom-control custom-radio">
        <input required onchange="document.getElementById('formCartao').style.display='none'" type="radio" id="entrega_cartao" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="entrega_cartao">Cartão de crédito</label>
      </div>

      <hr>

      <h4 class="text-uppercase">Pagar online<h4>
      <div class="custom-control custom-radio">
        <input required onchange="document.getElementById('formCartao').style.display='block'" type="radio" id="online_cartao" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="online_cartao">Cartão de crédito</label>
      </div>

      <div id="formCartao" class="card w-50" style="display:none;">
        <div class="card-body">
          <div class="form-group">
            <label>Número do Cartão</label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label>Nome do titular</label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label>Data de validade</label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label>CVV</label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      
      <hr>

      <button type="submit" class="btn btn-primary">Finalizar pedido</button>
    </form>
	</div>

</body>
</html>