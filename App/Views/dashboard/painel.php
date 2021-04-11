<!DOCTYPE html>
<html>
<head>
	
    <!-- Bootstrap -->
	 <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>Resource/css/painel.css">
	
	<!-- Icone -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Anúncios</title>
	
</head>
<body>
	<header>
		<div id="topMenu">
			<div id="colunaLogo">
				<img id="logomarca" src="<?php echo URL_BASE; ?>Resource/images/logomarca.png" alt="">
			</div>
			<div class="colunaTop">
			  	<nav id="linksTop">
			  		<ul>
			  		  <li><i class="fas fa-home"></i><a class="textLink" href="<?php echo URL_BASE; ?>veiculos/home">Home</a></li>
			  		  <li><i class="fas fa-images"></i><a class="textLink" href="<?php echo URL_BASE; ?>anuncios/geral">Anúncios gerais</a></li>
					  <!-- Se tiver logado opções são liberadas -->
					  <?php if(isset($_SESSION['logado'])): ?>
			  		 	<li><i class="far fa-id-badge"></i><a class="textLink" href="<?php echo URL_BASE; ?>anuncios/perfil">Meu perfil</a></li>
						<li><i class="fas fa-bookmark"></i><a class="textLink" href="<?php echo URL_BASE; ?>anuncios/favoritos">Favoritos</a></li>
						<li><i class="fas fa-plus"></i><a class="textLink" href="<?php echo URL_BASE; ?>anuncios/criarAnuncio">Criar anúncio</a></li>
					  <?php endif; ?>
			  		  <li><i class="fas fa-phone-volume"></i><a class="textLink" href="">Contatos</a></li>
			  		</ul>
			  	</nav>
			</div>
			<div class="colunaTop">
				<?php if(isset($_SESSION['logado'])): ?>
					<label for="">Olá,  <?php echo $_SESSION['userNome']; ?></label>
					<a href="<?php echo URL_BASE; ?>usuarios/logout">Logout</a>
				<?php else: ?>
					<i class="fas fa-user-alt"></i> <a class="buttons-user" href="<?php echo URL_BASE; ?>usuarios/login">Login</a> /<a class="buttons-user" href="<?php echo URL_BASE; ?>usuarios/cadastro">Criar conta</a>
				<?php endif; ?>
			</div>
			
		</div>
		
	</header>
    <section id="conteudo">
        <?php require_once 'App/Views/'.$view.'.php'; ?>
    </section>
   
</body>
</html>