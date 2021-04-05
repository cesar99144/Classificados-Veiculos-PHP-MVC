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
    <div class="row">
    
        <?php foreach($data['anuncios'] as $anuncios): ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo URL_BASE; ?>uploads/<?php echo $anuncios['imagemVeiculo']; ?>" alt="Card image">
                <div class="card-body">
                    <label id="valor" for="">R$ <?php echo $anuncios['preco']; ?></label>
                    <h4 class="card-title"><?php echo $anuncios['titulo']; ?></h4>
                    <p class="card-text"><?php echo $anuncios['descricao']; ?></p>
                    <label for=""><i class="fas fa-tachometer-alt"></i><?php echo $anuncios['km']; ?> km</label>
                    <label for=""><i class="fas fa-copyright"></i> <?php echo $anuncios['marca']; ?></label><br>
                    <label for=""><i class="fab fa-bandcamp"></i> <?php echo $anuncios['modelo']; ?></label>
                    <label for=""><i class="fas fa-exclamation-triangle"></i> Usado</label><br>
                    <a class="btn btn-primary" href="<?php echo URL_BASE; ?>anuncios/vizualizarVeiculo/<?php echo $anuncios['id']; ?>/<?php echo $anuncios['usuarioAnunciante']; ?>">Detalhes</a>
                    <a id="favoritoButton" href="#" ><i class="fas fa-bookmark"></i> Favoritar</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    
</body>
</html>