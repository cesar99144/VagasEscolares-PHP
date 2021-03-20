<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adm</title>
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/dashAdmin.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <nav id="barra" id="nav" class="navbar navbar-expand-sm p-3 mb-2 bg-dark text-white navbar-dark d-flex justify-content-between">
            <!-- Brand -->
            <a id="titulo-Logo" class="navbar-brand" href="#">Painel admin</a>

            <!-- Centro -->

            <div class="info">

                <a id="titulo-Logo" class="navbar-brand" href="#"><?php echo $_SESSION['RazaoEscola']; ?></a>
            
            </div>

             <!-- Links -->
            <ul id="infoLogout" class="navbar-nav">
                
                <li><a class="nav-link" href="<?php echo URL_BASE; ?>"> <?php echo $_SESSION['userNome']; ?></a></li>
                <li><a class="nav-link bg-danger" href="<?php echo URL_BASE; ?>admin/logout"><i class="fad fa-sign-out">Logout</i></a></li>

                
            </ul>
        </nav>
        <nav class="nav nav-pills nav-fill container bg-dark d-flex justify-content-center">
            <a class="nav-item nav-link text-light" href="<?php echo URL_BASE; ?>Admin/vagasAdmin">Vagas</a>
            <a class="nav-item nav-link text-light" href="<?php echo URL_BASE; ?>Admin/solicitacoes">Matriculas aprovadas</a>
            <a class="nav-item nav-link text-light" href="<?php echo URL_BASE; ?>Admin/solicitacoes">Solicitações</a>
        </nav>

        <?php require_once 'App/views/'.$view.'.php'; ?>
    </body>
</html>
