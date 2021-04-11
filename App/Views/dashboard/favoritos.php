<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/anuncios.css" >
    <title>Favoritos</title>

    
</head>
<body>
    
    <?php 

       //Paginação
        $pagination = new App\Pagination($data['anuncios'], isset($_GET['page'])? $_GET['page'] : 1, 8);
    ?>

    <?php

        //Mensagem de retorno caso não haja nenhum livro
        if(empty($pagination->resultado())):

          echo "<label id='textoMensagem'>Nenhum anúncio encontrado</label>";

        endif;

    ?>
    <div class="row ">
    
        <?php foreach($pagination->resultado() as $anuncios): ?>
            <div class="card">
                <div id="infoAnunciante">
                    <?php if($anuncios['status'] == 'Desativado'): ?>
                        <div id="erroStatus">
                            Desativado
                        </div>
                    <div>
                        
                    </div>
                    <div id="cidadeAnunciante">
                        Pausado pelo anunciante
                    </div>
                    <?php endif; ?>
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
                            <a class="btn btn-primary" href="<?php echo URL_BASE; ?>anuncios/vizualizarVeiculo/<?php echo $anuncios['id']; ?>/<?php echo $anuncios['usuarioAnunciante']; ?>">Detalhes</a>
                        <?php endif; ?>
                        <a id="favoritoButton" href="<?php echo URL_BASE; ?>anuncios/removerFavorito/<?php echo $anuncios['idFavorito']; ?>" ><i class="fas fa-bookmark"></i> Remover</a>
                        <a id="favoritoButton" onclick="abrirModal('codigo-modal', '<?php echo URL_BASE; echo 'anuncios/vizualizarVeiculo/'; echo $anuncios['id']; echo '/'; echo $anuncios['usuarioAnunciante']; ?>')" href="#" ><i class="fas fa-share-square"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>

        <?php
            //Exibe as quantidades de páginas

             $pagination->navigator();

        ?>

        <!-- Modal compartilhar código -->
        <div id="codigo-modal" class="modal">
            <div class="modal-conteudo">
                <div class="modal-titulo">
                    <h1>Compartilhar postagem</h1>
                <div class="modal-corpo">

                    <form action="https://api.whatsapp.com/send/" method="GET" target="_blank">

                        <label id="share-info" for=""> Compartilhe o link: </label><br>
                        <input id="link-Share" name="text"/><br> 
                        <button type="submit" id="linkwhats"  name="enviar" type="submit"><i class="fab fa-whatsapp"> whatsapp</i></button>
                        
                    </form>
                </div>
                <div class="modal-butoes">
                    <button class="btn" onclick="fecharModal('codigo-modal')">Cancelar</button>
                </div>
            </div>
        </div>
    
        <script src="<?php echo URL_BASE; ?>Resource/javascript/anuncios.js"></script>
</body>
</html>