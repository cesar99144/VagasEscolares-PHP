<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/principal.css">
        <title>Educacional</title>
        <!-- Icone -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- bootstrap local -->
        <script src="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>
    </header>
    <body>
        <header>
            <div class="logo">
                <img id="logo" src="<?php echo URL_BASE; ?>Resource/imagens/logo.png" alt="">
            </div>
            <div class="links-menu">
                <nav id="menu">
                    <ul>
                       <li class="molde"><a href="#buscar" class="textLinks">Vagas</a></li>
                       <li class="molde"><a href="#sobre" class="textLinks">Sobre</a></li>
                       <li class="molde"><a href="#apresentacao" class="textLinks">Como se associar</a></li>
                       <li class="molde"><a href="contato.html" class="textLinks">Contatos</a></li>
                    </ul>
                 </nav>
            </div>
            <div class="button-header">
                <a id="botaoLogin" href="<?php echo URL_BASE; ?>educacional/usuario">Login e cadastro</a>
            </div>
        </header>
        <section id="buscar">
            <div class="area-busca">
                <div class="titulo-busca">
                    <h1>Área do estudante</h1>
                </div>
                <div class="dadosConsulta">
                    <div id="escolas-busca">  
                       <a id="buscarVagasButton" href="<?php echo URL_BASE; ?>educacional/buscarVagasEscolas" class="ButtonsHome"><i class="fas fa-search"></i><span>Buscar vagas </span></a>
                       <a class="ButtonsHome" id="acompanharButton" onclick="abrirModal('codigo-modal')" class="btn btn-primary btn-sm"><i class="far fa-clipboard"></i><span>Acompanhar matrícula</span></a>
                    </div>
                </div>
                   
                
                
            </div>
        </section>

        <section id="sobre">
            <p>Plataforma com objetivo de facilitar acesso de alunos a procura de vagas disponíveis em instituições educacionais específicas e condições específicas no conforto de suas casas, com site com alta facilidade de navegação e bem fácil achar a instituição de sua escolha e ver as vagas disponíveis.</p>

            <div class="parceiros">
                <h1>Parceiros</h1> <br> <br>

                <!--Alguns exemplos de colégios parceiros do site-->
                <nav id="parceirosList">
                   <ul>
                <?php foreach($data['escolasLista'] as $escolas): ?>

                    <li><?php echo $escolas['razaoSocial']; ?></li> 
 
                <?php endforeach; ?>
                   </ul>
                </nav>
            </div>
        </section>

        <section id="apresentacao">
            <div class="conteudoTexto">
                <div class="textoInformativo">
                    <h2>Porque utilizar nossa <br><span>plataforma ?</span></h2>
                </div><br><br>
                <div class="desc">
                    <p id="conteudoDesc">Nossa plataforma tem como objetivo facilitar a conexão entre alunos e escolas, 
                        <br>De modo que o estudante possa ter acesso as vagas disponíveis em escolas de seu<br> interesse, podendo filtrar por sua série escolar e turno de interesse. Sem ser <br>  necessário sair de casa
                    </p><br>
                    <p id="conteudoDesc">Para associar sua escola a nossa plataforma é muito simples, basta apenas realizar <br> um cadastro
                    </p>
                    <div class="botao">
                        <a href="login.html" value="Buscar">Cadastrar minha escola</a>
                    </div> 
                </div>
            </div>
            <div class="conteudoImagem">
                <img src="imagens/sobre.png" alt="">
            </div>
        </section>
        <section id="contatos">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </section>

        <footer id="rodape">
            <p> &copy; 2021 Copyright - Alison, César, Jefferson, Juan, Paulo </p>
        </footer>

        <!-- Modal -->
        <div id="codigo-modal" class="modal">
        <div class="modal-conteudo">
            <div class="modal-titulo">
                    <h1>CPF do aluno</h1>
            <div class="modal-corpo">
                <form action="<?php echo URL_BASE; ?>educacional/acompanhar" method="POST">
                    <input id="cpf" name="cpf" type="text" ><br>
                    <input class="buttonModal" id="buscar-matricula" type="submit" name="buscar"  value="Buscar">
                </form>
            </div>
            <div class="modal-butoes">
                <button class="buttonModal" id="fecharModal" onclick="fecharModal('codigo-modal')">Cancelar</button>
                 
            </div>
            </form>
        </div>
    </div>

     <script src="<?php echo URL_BASE; ?>Resource/javascript/home.js"></script>
    </body>
</html>