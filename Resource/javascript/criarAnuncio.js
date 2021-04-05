//Para vizualizar a foto do veículo antes de fazer o upload
function previewImagem(){
	var imagem = document.querySelector('input[name=foo]').files[0];
	//var preview = document.querySelector('preview-img');
	var preview = document.getElementById('preview-img');
	
	var reader = new FileReader();
	
	reader.onloadend = function () {
		preview.src = reader.result;
	}
	
	if(imagem){
		reader.readAsDataURL(imagem);
	}else{
		preview.src = "";
	}
}