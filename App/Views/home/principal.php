<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/principal.css">
        <title>Educacional</title>
    </header>
    <body>
        <header>
            <div class="logo">
                <img id="logo" src="imagens/logo.png" alt="">
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
                    <h1>Buscar por vagas</h1>
                </div>
                <div class="dadosConsulta">
                    <div class="escola">
                       <div class="titulo-escola">
                          <label for="escola">Escola</label>
                       </div>
                       <form action="">
                       <select class="conteudo-select" name="escola" id="escola">
                            <option value="">Diocesano</option>
                            <option value="">Exato</option>
                            <option value="">Colegio atual</option>
                       </select>
                    </div> 
                    <div class="escola">
                       <div class="titulo-escola">
                          <label for="escola">Modalidade</label>
                       </div>
                       <select class="conteudo-select" name="modalidadeEscolar" id="modalidadeEscolar">
                            <option value="">Ensino fundamental</option>
                            <option value="">Ensino médio</option>
                       </select>
                    </div> 
                </div>
                <div id="segundaDados" class="dadosConsulta">
                    <div class="escola">
                       <div class="titulo-escola">
                          <label for="escola">Período</label>
                       </div>
                       <form action="">
                       <select class="conteudo-select">
                            <option value="">Manhã</option>
                            <option value="">Tarde</option>
                            <option value="">Integral</option>
                       </select>
                    </div> 
                    <div class="escola">
                       <div class="titulo-escola">
                          <label for="escola">Turma</label>
                       </div>
                       <select class="conteudo-select" name="escola" id="escola">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                       </select>
                    </div> 
                </div>
                
                <div class="botao-busca">
                    <input type="submit" value="Buscar">
                    </form>
                 </div> 
            </div>
        </section>

        <section id="sobre">
            <p>Plataforma com objetivo de facilitar acesso de alunos a procura de vagas disponíveis em instituições educaciomais específicas e condições específicas no conforto de suas casas, com site com alta facilidade de navegação e bem fácil achar a instituição de sua escolha e ver as vagas disponíveis.</p>

            <div class="parceiros">
                <h1>Parceiros</h1> <br> <br>

                <!--Alguns exemplos de colégios parceiros do site-->
                <h2>Colégio Diocesano</h2> 
                <h2>Aplicação Professora Ivonita Alves</h2>
                <h2>Colégio CEMA</h2>
                <h2>Colégio Espaço Educativo</h2>
                <h2>Colégio Santa Sofia</h2>
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

        <footer id="rodape">
            <p> &copy; 2021 Copyright - Alison, César, Jefferson, Juan, Paulo </p>
        </footer>

     <script src="javascript/home.js"></script>
    </body>
</html>