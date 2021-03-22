<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>Resource/css/cadastrarUsuario.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastrar usuário</title>
</head>
<body>
    <div class="login-form">
        <form action="<?php echo URL_BASE; ?>educacional/cadastrarUsuario" method="POST">
            <h2 class="text-center">Criar usuário para acessar o sistema</h2>   
            <div class="form-group has-error">
                <input type="text" class="form-control" name="nome" placeholder="Nome" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required="required">
            </div>      
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div> 
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha" required="required">
            </div>        
            <div class="form-group">
                <button type="submit" name="" class="btn btn-primary btn-lg btn-block">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>