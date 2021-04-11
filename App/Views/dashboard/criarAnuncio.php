<link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/criarAnuncio.css">

<br><br>
<div class="container">
<form action="<?php echo URL_BASE; ?>anuncios/criarAnuncio"  method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título anúncio</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Descrição anúncio</label>
      <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="km">Quilometragem veículo</label>
        <input type="number" class="form-control" id="km" name="km" placeholder="KM">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Marca</label>
      <input type="text" class="form-control" id="marca" name="marca" placeholder="Ex: FIAT, Volkswagen, peugeot">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
          <label for="inputAddress2">Modelo</label>
          <input type="text" class="form-control" id="modelo" name="modelo">
      </div>
    <div class="form-group col-md-3">
      <label for="inputCEP">Preço de venda:</label>
      <input type="text" class="form-control" id="preco" onchange="mascaraDinheiro()" name="preco">
    </div>
    <div class="form-group col-md-3">
        <select id="estadoVeiculo" name="estadoVeiculo" class="form-control">
            <option selected>Escolher...</option>
            <option>Usado</option>
            <option>Novo</option>
        </select>
    </div>
    
  </div>
 
</div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <span>Imagem do veículo</span><br>
            <input type="file" name="foo" id="upload" onchange="previewImagem()" value="" required><br>
        </div>
        <div class="form-group col-md-6">
          <img id="preview-img"><br>
        </div>
        <div class="form-group col-md-10">
            <button type="submit" class="btn btn-primary">Criar anúncio</button>
        </div>
    </div>
</form>
</div>

<script src="<?php echo URL_BASE; ?>Resource/javascript/criarAnuncio.js"></script>