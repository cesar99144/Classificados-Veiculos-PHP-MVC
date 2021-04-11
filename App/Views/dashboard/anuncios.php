<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/anuncios.css" >
    <title>Document</title>

    
</head>
<body>
    <div id="topoPesquisa">
            <div class="colunaTop">
                
            </div>
            <div class="colunaPesquisa">
              <form action="<?php echo URL_BASE; ?>anuncios/pesquisar" method="POST">
                
                <select name="marcasBusca" class="select-formulario">
                    <option onselect="">Marcas...</option>
                    <?php foreach($data['marcas'] as $marcas): ?>
                        <option value="<?php echo $marcas['marca']; ?>"><?php echo $marcas['marca']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input class="input-formulario" type="search" name="tituloBusca" placeholder="Buscar por palavra chave">
                <button id="input-submit" type="submit" name=""><i class="fas fa-search"></i></button>
              </form>
            </div>
            <div class="colunaTop">
            <?php if(isset($_SESSION['logado'])): ?>
                <a id="button-criarAnuncio" href="<?php echo URL_BASE; ?>anuncios/criarAnuncio">Criar anúncio</a>
            <?php endif; ?>
            </div>
        </div>
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
                    <div id="nomeAnunciante">
                        <?php echo $anuncios['Nome']; ?>
                    </div>
                    <div>
                        
                    </div>
                    <div id="cidadeAnunciante">
                        <?php echo $anuncios['cidade']; ?> - <?php echo $anuncios['uf']; ?>
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
                        <a class="btn btn-primary" href="<?php echo URL_BASE; ?>anuncios/vizualizarVeiculo/<?php echo $anuncios['id']; ?>/<?php echo $anuncios['usuarioAnunciante']; ?>">Detalhes</a>
                        <!-- Verifica se há uma sessão logada -->
                        <?php if(isset($_SESSION['logado'])): ?>
                          
                                <a id="favoritoButton" href="<?php echo URL_BASE; ?>anuncios/cadastrarFavoritos/<?php echo $anuncios['id']; ?>" ><i class="fas fa-bookmark"></i> Favoritar</a>
                            
                        <?php endif; ?>
                        
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
                        <label id="share-info" for=""> Ou: </label><br>
                        <button type="submit" id="linkwhats"  name="enviar" type="submit"><i class="fab fa-whatsapp"> whatsapp</i></button>
                        
                    </form>
                </div>
                <div class="modal-butoes">
                    <div>
                    
                    </div>
                    <div>
                        <button id="buttonClose" class="btn" onclick="fecharModal('codigo-modal')">Cancelar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <script src="<?php echo URL_BASE; ?>Resource/javascript/anuncios.js"></script>
</body>
</html>