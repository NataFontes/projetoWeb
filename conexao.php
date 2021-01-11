
<?php
	$conexao = mysqli_connect("localhost", "root", "", "esportstore");
	if( ! $conexao){
		echo "Erro - A conexão falhou". mysqli_connect_error();
	}
?>