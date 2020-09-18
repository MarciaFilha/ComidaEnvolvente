<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Comida Envolvente - Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="cadastro">
	<div class="container cadastro-bg">
		<h2>Cadastrar</h2>
		<form id="cadastrarForm" action="incluirusuario.php" method="post">
			<p><span style="color: red;">*</span> Campo Obrigatório</p>
			<table>
				<tr>
					<td><label>Nome Completo:<span style="color: red;">*</span></label></td>
					<td><input type="text" name="nomeCompleto"></td>
				</tr>
				<tr>
					<td><label>Telefone:</label></td>
					<td><input type="text" name="telefone"></td>
				</tr>
				<tr>
					<td><label>Endereço:</label></td>
					<td><input type="text" name="endereco"></td>
				</tr>
				<tr>
					<td><label>Email:<span style="color: red;">*</span></label></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><label>Senha:<span style="color: red;">*</span></label></td>
					<td><input type="password" name="senha"></td>
				</tr>
				<tr>
					<td><label>Confirmar Senha:<span style="color: red;">*</span></label></td>
					<td><input type="password" name="confSenha"></td>
				</tr>
			</table>
			<button type="submit">Cadastrado</button>
			<a href="login2.php">Cancelar Cadastro</a> 
		</form>
	</div>

</body>
</html>