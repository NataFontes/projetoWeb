<?php
require("conexao.php");

$nome = $_POST['txtNome'];
$preco = $_POST['txtPreco'];
$descricao = $_POST['txtDescricao'];
$categoria = $_POST['txtCategoria'];
$quantidadeDisponivel = $_POST['txtQuantidade'];

	$comando2 = "INSERT INTO categoria (idcategoria, descricao) VALUES ('$categoria', '$descricao')";
	$rodou2 = mysqli_query($conexao, $comando2);
?>
	<a href="administrador.php"> Administração </a>
<?php
	if( ! $rodou2){
		echo mysqli_error($conexao);
	}
	else{
		echo "categoria inserida!";
	}
	$comando = "INSERT INTO produto (preco, nomeproduto, descricao, idcategoria, quantidade_disponivel) VALUES ('$nome', '$preco', '$descricao', '$categoria', '$quantidadeDisponivel')";

	$rodou = mysqli_query($conexao, $comando);

	if( ! $rodou){
		echo mysqli_error($conexao);
	}
	else{
		echo "Produto inserido!";
	}

?>
