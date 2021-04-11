<link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/perfil.css">
<link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/anuncios.css" >

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover -->
                  <!-- BEGIN profile-header-content -->
                  <div class="profile-header-content">
                     <!-- BEGIN profile-header-img -->
                     <div class="profile-header-img">
                        <img src="<?php echo URL_BASE; ?>Resource/images/usuarioPng.png" alt="">
                     </div>
                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
                        <h4 class="m-t-10 m-b-5"><?php echo $_SESSION['userNome'].' '.$_SESSION['userSobreNome']; ?></h4>
                        <p class="m-b-10"><?php echo $_SESSION['userCidade'].', '.$_SESSION['userEstado']; ?></p>
                        <p class="m-b-10">Cadastro realizado: <?php echo $_SESSION['userDataCadastro']; ?></p>
                        <p class="m-b-10">Contatos: <?php echo $_SESSION['userEmail']; echo " | "; echo $_SESSION['userTelefone']; ?></p>
                       
                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
                  <!-- BEGIN profile-header-tab -->
                  <ul class="profile-header-tab nav nav-tabs">
                     <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">Anúncios</a></li>
                     
                  </ul>
                  <!-- END profile-header-tab -->
               </div>
            </div>
            <!-- end profile -->
            <div class="row">
              <?php foreach($data['anunciosUser'] as $anuncios): ?>
                <div class="card">
                <div id="infoAnunciante">
                  <?php if($anuncios['status'] == 'Aberto'): ?>
                    <div id="statusAnuncio">
                        <?php echo "aberto"; ?>
                    </div>
                  <?php elseif($anuncios['status'] == 'Desativado'): ?>
                    <div id="erroStatus">
                        <?php echo "Fechado"; ?>
                    </div>
                  <?php endif; ?>
                    <div id="cidadeAnunciante">
                       
                    </div>
                </div>
                <img id="imgCapa" class="card-img-top" src="<?php echo URL_BASE; ?>uploads/<?php echo $anuncios['imagemVeiculo']; ?>" alt="Card image">
                    <div class="card-body">
                        <label id="valor" for="">R$ <?php $valor = $anuncios['preco']; echo number_format($valor,2,",","."); ?></label>
                        <h4 class="card-title"><?php echo $anuncios['titulo']; ?></h4>
                        <p class="card-text"><?php echo $anuncios['descricao']; ?></p>
                        <!--<label for=""><i class="fas fa-tachometer-alt"></i><?php echo $anuncios['km']; ?>km</label>-->
                        <label class="atributos" for=""><i class="fas fa-copyright"></i> <?php echo $anuncios['marca']; ?></label><br>
                        <label class="atributos" for=""><i class="fab fa-bandcamp"></i> <?php echo $anuncios['modelo']; ?></label><br>
                        <label class="atributos" for=""><i class="fas fa-exclamation-triangle"></i> Usado</label><br>
                        <div id="buttonCar">
                              
                              <?php if($anuncios['status'] == 'Aberto'): ?>
                                 <a class="btn btn-danger text-white" id="favoritoButton" href="<?php echo URL_BASE; ?>anuncios/bloquearAnuncio/<?php echo $anuncios['id']; ?>" ><i class="fas fa-minus-square"></i> Desabilitar</a>
                              <?php elseif($anuncios['status'] == 'Desativado'): ?>
                                 <a class="btn btn-success text-white" id="favoritoButton" href="<?php echo URL_BASE; ?>anuncios/liberarAnuncio/<?php echo $anuncios['id']; ?>" ><i class="fas fa-vote-yea"></i> Habilitar</a>
                           
                              <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        
        
    </div>
            </div>
            <!-- end profile-content -->
         </div>
      </div>
   </div>
