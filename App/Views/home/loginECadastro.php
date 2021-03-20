<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!--para usar os icones das redes sociais-->
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/loginEcadastro.css">
    <title>Educacional - Cadastro</title>
</head>
<body>
    <aside class="lateral-esquerda">
        <h1>Seja Bem Vindo!</h1>

        <h2>Aqui você pode entrar ou se cadastrar em nosso site para usufruir dos nossos serviços</h2>
        <p>Se você já tiver uma conta cadastrada</p>
        
        <!--Essa Div abaixo foi criada somente para centralizar o botão-->
        <form action="">
            <input type="email" placeholder="Email"><br>
            <input type="password" placeholder="Senha">
        </form><br>
        <div><button class="btnLogin">Faça Login</button> </div>
    
        <img src="<?php echo URL_BASE; ?>Resource/imagens/7-TelaLogin.png" alt="Imagem de Estudante">
    </aside>

    <aside class="lateral-direita">
        <img src="<?php echo URL_BASE; ?>Resource/imagens/logo-TelaLogin.png" class="imgEstudante" alt="logo">

        <h1>Cadastre-se Já</h1>

        <input type="text" placeholder="Digite o nome da escola" class="txtNome"> <br>
        <input type="text" placeholder="Digite o e-mail " class="txtEmail"> <br>
        <input type="password" placeholder="Escolha a senha" class="txtSenha"> <br>
        <input type="password" placeholder="Digite novamente a senha" class="txtSenha2"> <br>
        <button class="btnCadastrar">Cadastrar</button>

        <div class="redes-sociais">
            <p>Conecte-se também usando suas redes sociais</p>
            <a href="https://www.facebook.com/" target="_blank"> <i class="facebook fa fa-facebook"></i> </a>
            <a href="https://twitter.com/" target="_blank"> <i class="twitter fa fa-twitter"></i> </a>
            <a href="https://www.instagram.com/" target="_blank"> <i class="instagram fa fa-instagram"></i> </a>
        </div>
    </aside>
</body>
</html>