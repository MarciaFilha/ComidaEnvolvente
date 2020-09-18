<?php
// abre conexao com o banco 
    require_once 'conectarBanco.php';

print_r($_POST); 
echo "<br><br>";
$id = $_POST["id"];
$prato = $_POST["prato"];
$valor = $_POST["valor"]; 
$quantidade = $_POST["quantidade"]; 

//monta sql para o banco de dados ,
$sql = "INSERT  INTO pedido ( id,prato, Valor, quantidade) VALUES ('".$id."','".$prato."','".$valor."','".$quantidade."')";
echo $sql;
echo "<br><br>";

$mysqli -> query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli -> close();

	
	header('Location: listarPedido.php');

?>