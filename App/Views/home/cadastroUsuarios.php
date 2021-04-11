<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/cadastroUsuario.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <title>Document</title>
</head>
<body>
    <div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Cadastro</h2>
                    <form action="<?php echo URL_BASE; ?>usuarios/cadastro" method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="nome" id="nome" placeholder="Nome"/>
                        </div>
                        <div class="form-group">
                            <label for="sobrenome"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="estado"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="estado" id="estado" placeholder="Estado"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="cidade"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="cidade" id="cidade" placeholder="Cidade"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="senha" id="senha" placeholder="Senha"/>
                        </div>
                        <div class="form-group">
                            <label for="telefone"><i class="zmdi zmdi-lock"></i></label>
                            <input type="number" name="telefone" id="telefone" placeholder="Telefone"/>
                        </div>
                       
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Cadastrar"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?php echo URL_BASE; ?>Resource/images/vendas.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Já sou membro</a>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo URL_BASE; ?>Resource/javascript/cadastroUsuario.js"></script>
</body>
</html>