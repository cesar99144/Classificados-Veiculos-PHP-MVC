<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/login.css">
    <title>Document</title>
</head>
<body>
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo URL_BASE; ?>Resource/images/Car-Ren.jpg" alt="sing up image"></figure>
                        <a href="<?php echo URL_BASE; ?>usuarios/cadastro" class="signup-image-link">Criar conta</a>
                        <a href="<?php echo URL_BASE; ?>veiculos/home" class="signup-image-link">Menu principal</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form action="<?php echo URL_BASE; ?>usuarios/login" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="userEmail"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="userEmail" id="userEmail" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="userSenha"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="userSenha" id="userSenha" placeholder="Senha"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
</body>
</html>