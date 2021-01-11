<!DOCTYPE html>
<html>
    <head>
        <title>Administração</title>
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
                            <div class="icons1e2"><a href="sacola.html"><i class="material-icons">shopping_basket</i></a></div></div></li>
                </ul>
            </div>
            <div id="borda2"></div>
            <div id="borda3"></div>
            
        <div class="titulos"><h1>Administração</h1></div>
        
        <div id="mae">   
        
        <div id="ladotexto">
        <form action="processa_cad_produto.php" method="post">
        <div class="subtitulos"><p>Cadastro de Produtos</p></div>
        <p>Nome:</p>
        <input type="text" name="txtNome">
        <p>Preço:</p>
        <input type="text" name="txtPreco">
        <p>Descrição:</p>
        <input type="text" name="txtDescricao">
        <p>Classificação Indicativa:</p>
        <input class="form" type="radio" name="txtCategoria" value="1">Livre<br>
        <input class="form" type="radio" name="txtCategoria" value="2">10 anos<br>
		<input class="form" type="radio" name="txtCategoria" value="3">12 anos<br>
		<input class="form" type="radio" name="txtCategoria" value="4">14 anos<br>
		<input class="form" type="radio" name="txtCategoria" value="5">16 anos<br>
		<input class="form" type="radio" name="txtCategoria" value="6">18 anos<br>
        <p>Quantidade disponível:</p>
        <input type="text" name="txtQuantidade">
        <p>Imagem do produto:</p>
        <input type="text" name="txtUpload"><br>
        <button id="botao" type="submit">Cadastrar</button></form></div>
        
        
        <div id="tabela2">
            <div class="subtitulos"><p>Produtos Cadastrados</p></div>
            <div id="menu">
                <div class="itensmenu"><p>Produto</p></div>
                <div class="itensmenu"><p>Estoque</p></div>
                <div class="itensmenu"><p>Preço<p></div>
                <div class="itensmenu"><p>Editar</p></div>  
                <div class="itensmenu"><p>Deletar</p></div> 
            </div>       
        
        <div id="a">
                <div class="produtos"><img src="vestido9.jpeg" alt="Vestido2"><p>Produto 1</p></div>
                <div class="itens"><p>9</p></div>
                <div class="itensad"><p>R$229,90</p></div>
                <div class="itensad"><button class="botaocadastro" type="submit">Editar</button></div>
                <div class="itensad"><button class="botaocadastro" type="submit">Deletar</button></div></div>
           
        <div id="b">
                <div class="produtos"><img src="vestido5.jpeg" alt="Vestido5"><p>Produto 2</p></div>
                <div class="itens"><p>6</p></div>
                <div class="itensad"><p>R$199,90</p></div>
                <div class="itensad"><button class="botaocadastro" type="submit">Editar</button></div>
                <div class="itensad"><button class="botaocadastro" type="submit">Deletar</button></div></div>
        
        <div id="d">
                <div class="produtos"><img src="vestido8.jpeg" alt="Vestido2"><p>Produto 3</p></div>
                <div class="itens"><p>7</p></div>
                <div class="itensad"><p>R$159,90</p></div>
                <div class="itensad"><button class="botaocadastro" type="submit">Editar</button></div>
                <div class="itensad"><button class="botaocadastro" type="submit">Deletar</button></div></div>
        </div>
        </div>
        </div>

        <div id="tabela2">
            <div class="subtitulos"><p>Clientes Cadastrados</p></div>
            <?php
                require_once "conexao.php";
                $comando = "SELECT * FROM usuario";
                $resultado = mysqli_query($conexao, $comando);
            ?>
            <a href="login.php?">Login</a>
            <?php
                while($linha = mysqli_fetch_assoc($resultado)){
            ?>
                <h3>Nome: <?=$linha['nomeusuario']?></h3>
                <button><a href="detalhar_usuario.php?cpf= <?=$linha['cpf']?>"> Ver detalhes </a></button>
                <button><a href="deletar_usuario.php?cpf= <?=$linha['cpf']?>"> Remover usuário </a></button>
                <button><a href="form_alterar_usuario.php?cpf= <?=$linha['cpf']?>"> Alterar usuário </a></button>
            <?php
                }
            ?>
        </div>    
        
        <div id="rodape">
        <footer>
            <nav>
                <div id="rodapecima">
                    <div id="menurodape">
                        <a class="linksrodape" href="index.php">Voltar á Página Inicial</a>
                        <a class="linksrodape" href="blackfriday.html">Black Friday</a>
                        <a class="linksrodape" href="administrador.html">Administração</a>
                        <a class="linksrodape" href="sacola.html">Carrinho de Compras</a>
                        <a class="linksrodape" href="sobrealoja.html">Sobre a E-sports Store</a>
                        <a class="linksrodape" href="login.html">Login</a></div>
                </div>
                <div id="rodapebaixo">
                    <div id="endereço"><p>Evergreen Terrace, 632 | Springifield/OR</p>
                        <p>CEP 97475 | Telefone: 4002-8922</p>
                    <div id="logosrodape">
                        <div id="plogo"><p>Siga-nos nas redes sociais:</p></div>
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
