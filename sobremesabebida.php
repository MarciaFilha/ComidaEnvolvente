<?php
  session_start();
  include "conectarbanco.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Cardapio
  </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-5">
    <a class="navbar-brand" href="principal.php"">
      <h1 style="font-family: Brush Script MT;">Comida Envolvente</h1>
    </a>

    <?php if(isset($_SESSION['email'])) { ?>
    <div class="ml-auto text-white">
      <span class="text-white d-block">
        <?php echo $_SESSION['email']; ?>
      </span>

      <a href="carrinho.php" class="text-primary">
        Minha sacola
      </a>

      |

      <a href="sairLogin.php" class="text-primary">
        Sair
      </a>
      
    </div>
    <?php } else { ?>
    <div class="ml-auto">
      <a href="login2.php" class="btn btn-light">Login</a>
    </div>
    <?php } ?>
  </nav>

  <div class="container">

    <div class="row">
      <div class="col">
        <h2>Cardápio</h2>
      </div>

      <div class="col text-right">
        <a href="sobremesabebida.php">
          + Adicionar bebida ou sobremesa
        </a>
      </div>
    </div>

    <hr>

    <div class="row">
      <?php
        $sql_produtos = "SELECT * FROM produtos WHERE id_categoria = 2";
        $query_produtos = mysqli_query($mysqli, $sql_produtos);
        
        // listando produtos da tabela
        while ($row = mysqli_fetch_assoc($query_produtos)) {
          echo '
            <div class="col-3">
              <form name="produto" id="produto" action="carrinho.php" method="get">
                <div class="card mb-4">
                  <img src="imagenscardapio/'.$row['imagem'].'" class="card-img-top">

                  <div class="card-body">
                    <h5 class="card-title">
                      '.$row['descricao'].'
                      <small class="d-block text-primary">R$ '.number_format($row['preco'], 2, ',', '.').'</small>
                    </h5>

                    <div class="input-group mb-3">
                      <select name="produto_qtd" class="custom-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                          Add
                        </button>
                      </div>
                    </div>

                    <input type="hidden" name="produto_id" value="'.$row['id_produto'].'">
                    <input type="hidden" name="produto_desc" value="'.$row['descricao'].'">
                    <input type="hidden" name="produto_preco" value="'.number_format($row['preco'], 2, ',', '.').'">
                    <input type="hidden" name="acao" value="add">
                  </div>
                </div>
              </form>
            </div>
          ';
        }
      ?>
    </div>
  </div>
</body>
</html>