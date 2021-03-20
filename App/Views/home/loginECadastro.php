<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!--para usar os icones das redes sociais-->
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/loginEcadastro.css">
    <title>Educacional - Cadastro</title>

    <!-- JQUERY CNPJ-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <aside class="lateral-esquerda">
        <h1>Seja Bem Vindo!</h1>

        <h2>Aqui você pode entrar ou se cadastrar em nosso site para usufruir dos nossos serviços</h2>
        <p>Se você já tiver uma conta cadastrada</p>
        
        <!--Essa Div abaixo foi criada somente para centralizar o botão-->
        <form action="<?php echo URL_BASE; ?>educacional/login" method="POST">
            <input type="email" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Senha" name="senha" required>
            <div><input type="submit" class="btnLogin" name="entrar" value="Faça Login"></div>
        </form><br>
        <?php 
          //Exibe mensagens de validação para o usuário
          if(!empty($data['mensagem'])):

            foreach($data['mensagem'] as $m):
                echo $m."<br>";
            endforeach;

          endif;

        ?><br>

        <img src="<?php echo URL_BASE; ?>Resource/imagens/7-TelaLogin.png" alt="Imagem de Estudante">
    </aside>

    <aside class="lateral-direita">
        <img src="<?php echo URL_BASE; ?>Resource/imagens/logo-TelaLogin.png" class="imgEstudante" alt="logo">

        <h1>Cadastre-se Já</h1>
        <form action="<?php echo URL_BASE; ?>educacional/cadastrarEscola" method="POST">
            <input id="cnpj" name="cnpj" type="text" placeholder="Digite o cnpj da escola" class="txtNome" required> <button id="pesquisar" class="btnCadastrar">Buscar cnpj</button> <br>
            <input id="razaoSocial" name="razaoSocial" type="text" placeholder="Digite a razão social " class="txtEmail" required> <br>
            <input id="cidade" name="cidade" type="text" placeholder="Digite a cidade" class="txtSenha" required> <br>
            <input id="uf" name="uf" type="text" placeholder="Digite o estado" class="txtSenha" required> <br>
            <input type="submit" class="btnCadastrar" value="Cadastrar">
        </form>

        <div class="redes-sociais">
            <p>Conecte-se também usando suas redes sociais</p>
            <a href="https://www.facebook.com/" target="_blank"> <i class="facebook fa fa-facebook"></i> </a>
            <a href="https://twitter.com/" target="_blank"> <i class="twitter fa fa-twitter"></i> </a>
            <a href="https://www.instagram.com/" target="_blank"> <i class="instagram fa fa-instagram"></i> </a>
        </div>
    </aside>

     <script src="<?php echo URL_BASE; ?>Resource/javascript/buscaCnpj.js" type="text/javascript"></script>
</body>
</html>