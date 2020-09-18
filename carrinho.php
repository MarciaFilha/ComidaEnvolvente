<?php 
    session_start();

    if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    }

    if(isset($_GET['acao']) && isset($_SESSION['email'])) {
        $produto = $_GET['produto_id'];

        // adicionando produtos
        if($_GET['acao'] == 'add') {
            $_SESSION['carrinho'][$produto] = array(
                'id' => $_GET['produto_id'],
                'qtd' => $_GET['produto_qtd'],
                'desc' => $_GET['produto_desc'],
                'preco' => $_GET['produto_preco'],
            );
        }

        // removendo produtos
        if($_GET['acao'] == 'del') {
            unset($_SESSION['carrinho'][$produto]);
        }

        // alterando a quantidade
        if($_GET['acao'] == 'qtd') {
            $_SESSION['carrinho'][$produto]['qtd'] = $_GET['qtd'];
        }

        // redireciona para o carrinho toda vez que executa alguma ação
        header('Location: carrinho.php');
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>
        Carrinho
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
        <a class="navbar-brand" href="Principal.php"">
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

    <?php
        if(!isset($_SESSION['email'])) {
            echo '<p align="center">Faça login para continuar. <a href="login2.php">Login -></a></p>';
        } else { ?>

        <div class="container">
            <?php
                if(!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
                    echo 'Carrinho vazio.';
                } else {
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>Qtd</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>SubTotal</th>
                        <th width="10"></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['carrinho'] as $key => $value) { ?>
                    <tr>
                        <td>
                            <form id="select_<?php echo $value['id']; ?>" method="get" action="carrinho.php">
                                <input type="hidden" name="acao" value="qtd">
                                <input type="hidden" name="produto_id" value="<?php echo $value['id']; ?>">

                                <select name="qtd" value="<?php echo $value['qtd']; ?>" onchange="document.getElementById('select_<?php echo $value['id']; ?>').submit()">
                                    <?php
                                        for($i=1; $i<=10; $i++) {
                                            if($i == $value['qtd']) {
                                                echo '<option selected value="'.$i.'">'.$i.'</option>';
                                            } else {
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </form>
                        </td>
                        <td><?php echo $value['desc']; ?></td>
                        <td>R$ <?php echo number_format((float)$value['preco'], 2, ',', '.'); ?></td>
                        <td>R$ <?php echo number_format((float)$value['preco'] * $value['qtd'], 2, ',', '.'); ?></td>
                        <td width="10">
                            <a href="carrinho.php?acao=del&produto_id=<?php echo $value['id']; ?>" class="btn btn-link">
                                Remover
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php } ?>
                
            <hr>

            <div class="row">
                <div class="col">
                    <a href="carrinhoLimpar.php" class="btn btn-outline-primary">Limpar Carrinho</a>
                    <a href="cardapio.php" class="btn btn-outline-primary">Continuar Comprando</a>
                </div>
                
                <div class="col text-right">
                    <a href="finalizarpedido.php" class="btn btn-primary">
                        Forma de pagamento
                    </a>
                </div>
            </div>
        </div>

        <?php } ?>
 
</body>
</html>