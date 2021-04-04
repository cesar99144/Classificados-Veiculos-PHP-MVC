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
				logo
			</div>
			<div class="colunaTop">
			  	<nav id="linksTop">
			  		<ul>
			  		  <li><i class="fas fa-home"></i><a class="textLink" href="<?php echo URL_BASE; ?>veiculos/home">Home</a></li>
			  		  <li><i class="fas fa-images"></i><a class="textLink" href="#">Anuncios</a></li>
					  <?php if(isset($_SESSION['logado'])): ?>
			  		 	<li><i class="far fa-id-badge"></i><a class="textLink" href="">Perfil</a></li>
						<li><i class="fas fa-bookmark"></i><a class="textLink" href="">Favoritos</a></li>
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
					<i class="fas fa-user-alt"></i> <a class="buttons-user" href="#">Login</a> /<a class="buttons-user" href="#">Criar conta</a>
				<?php endif; ?>
			</div>
			
		</div>
		<div id="topoPesquisa">
			<div class="colunaTop">
				
			</div>
			<div class="colunaPesquisa">
			  <form>
			  	<select class="select-formulario">
			  		<option onselect="">Localização...</option>
			  		<option>Teste</option>
			  		<option>Teste</option>
			  	</select>
                <select class="select-formulario">
			  		<option onselect="">Marcas...</option>
			  		<option>Teste</option>
			  		<option>Teste</option>
			  	</select>
			  	<input class="input-formulario" type="search" name="" placeholder="Buscar por palavra chave">
			  	<button id="input-submit" type="submit" name=""><i class="fas fa-search"></i></button>
			  </form>
			</div>
			<div class="colunaTop">
			<?php if(isset($_SESSION['logado'])): ?>
				<a id="button-criarAnuncio" href="#">Criar anuncio</a>
			<?php endif; ?>
			</div>
		</div>
	</header>
    <section id="conteudo">
        <?php require_once 'App/Views/'.$view.'.php'; ?>
    </section>
   
</body>
</html>