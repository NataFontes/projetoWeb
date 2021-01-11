<!DOCTYPE html>
<html>
    <head>
        <title>Deletar Cliente</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="tabela.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <div id="pginicial">
            <div id="volta">
                <ul class="navbar">
                    <li class="item-nav"><img id="logoloja" src="logoesports1.jpg" alt="Logo"></li>
                    <li class="item-nav">
                        <div id="search"><input id="inputcabecalho" type="text" name="pesquisa" placeholder="Pesquisa">
                            <button><i class="material-icons">search</i></button></div>
                     </li>
                    <li class="item-nav">
                        <div id="icones"><div class="icons1e2"><a href="login.html"><i class="material-icons">person_pin</i></a></div>
                            <div class="icons1e2"><a href="carrinho.html"><i class="material-icons">shopping_basket</i></a></div></div></li>
                </ul>
            </div>
            <div id="borda2"></div>
            <div id="borda3"></div>
            
        <div class="titulos"><h1>Deletar Usuário</h1></div>

<div id="tabela2">
<?php
	require_once('conexao.php');
	$cpf = $_GET['cpf'];
	$comando = "DELETE FROM usuario WHERE cpf = $cpf";
	$result = mysqli_query($conexao, $comando);
?>
	<a href="administrador.php?"> Voltar para a administração </a>
<?php
	if( ! $result){
		echo "Erro ao remover!";
	}
	else{
		echo "Usuário removido!";
	}

	$comando = "DELETE FROM endereco WHERE cpf = $cpf";
	$result = mysqli_query($conexao, $comando);
?>
</div>

<div id="rodape">
        <footer>
            <nav>
                <div id="rodapecima">
                    <div id="menurodape">
                        <a class="linksrodape" href="index.html">Voltar á Página Inicial</a>
                        <a class="linksrodape" href="blackfriday.html">Black Friday</a>
                        <a class="linksrodape" href="administrador.html">Administração</a>
                        <a class="linksrodape" href="sacola.html">Carrinho de Compras</a>
                        <a class="linksrodape" href="sobrealoja.html">Sobre a E-Sport Store</a>
                        <a class="linksrodape" href="login.html">Login</a></div>
                </div>
                <div id="rodapebaixo">
                    <div id="endereço"><p>Evergreen Terrace, 632 | Springifield/OR</p>
                        <p>CEP 97475 | Telefone: 4002-8922</p>
                    </div>
                    <div id="logosrodape">
                        <div id="plogo"><p>Siga-nos:</p></div>
                        <div id="redesocial">
                        <img class="logosrodape" src="icone1.jpg" alt="Ícone">
                        <img class="logosrodape" src="icone2.png" alt="Ícone">
                        <img class="logosrodape" src="icone3.png" alt="Ícone">
                        <img class="logosrodape" src="icone4.png" alt="Ícone">
                        </div></div>
                    <div id="bannerdorodape"><img id="bannerrodape" src="logoesports1.jpg" alt="Logo"></div>
                </div>
            </nav>
        </footer>
        </div>

    </body>
</html>
