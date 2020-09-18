<!DOCTYPE html> <!--informar ao navegador que se trata de um documento html5-->
<html> <!-- iniciar a tag -->
<head> <!-- tag para configuração do documento e indicar o titulo da pagina -->
	<title>  <!-- tag para o titulo da pagina -->
		Principal
	</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- biblioteca do bootstrap -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		
</head>

<body> <!-- tag principal para o corpo da pagina -->

<div class="container"> <!-- a tag div serve para dividir/organizar o código sempre atribuindo a um ID ou class ou so separar o codigo, a class container vai alinhar seu codigo no centro -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> <!-- tag Nav faz parte da navegação do site, ao inves do DIV uso o nav-->
	  <a class="navbar-brand" href="principal.php"> <!-- a tag <a> serve para indicar que haverá um hiperlink para outra pagina -->
	  	<h1 style="font-family: Brush Script MT;">Comida Envolvente</h1> <!-- h1 é do titulo -->
	  </a>
	</nav>

			<!-- Link para Login -->
	<div >
		<div class="jumbotron text-center" style=" background-image:url('Imagens/Principal.jpg!d.jpeg');">
				<br>
			   <br>
			   <br>
				<h1> <a href="login2.php" style="text-decoration: none;color: inherit;">Clique aqui para fazer o login</a></h1>
			   <br>
			   <br>
			   <br>

		</div>
	</div>

	
		<!-- link para cadastro -->
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <a class="navbar-brand" href="#">
	  	<h1 style="font-family: Brush Script MT;"> 
	  		<a href="cadastrar2.php" style="text-decoration: none;color:white;">Clique aqui se ainda não é nosso cliente e cadastre-se para fazer seu pedido!</a>
	  	</h1>
	  </a>
	</nav>
	 <br>	
		<!-- cardapios -->
	<div class="row">
	    <div class="col-lg-6">
	        <img class="img-fluid rounded mb-4" src="Imagens/Sobremesa.jpg" alt="">
		       <h3 class="text-center"> <a href="sobremesabebida.php">Bebidas e Sobremesas</a></h3>
	    </div>

        <div class="col-lg-6">
		    <img class="img-fluid rounded mb-4" src="Imagens/cardapio.jpg" alt="">
		      <h3 class="text-center"> <a href="cardapio.php">Visualizar o Cardapio</a> </h3>
		</div>
    </div>

		<!-- roda pé style="margin-top:30px"-->
	<div class="jumbotron text-center" style="margin-bottom:0">
		<p> &copy;ComidaEnvolvente </p>
	</div>
</div>
		

</body>
</html>