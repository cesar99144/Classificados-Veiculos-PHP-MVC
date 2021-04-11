<?php

use App\Core\Conexao;

class FavoritosDao extends Conexao{

    public function cadastrar(Favoritos $p){

        $query = "INSERT INTO favoritos (idUsuario, idPostagem) Values (?, ?)";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $p->getIdUsuario());
        $stmt->bindValue(2, $p->getIdPostagem());

        if($stmt->execute()):

            echo "<script>alert('Postagem adicionada aos seus favoritos com sucesso'); location ='/anuncios/favoritos'; </script>";
        else:

            echo "<script>alert('Erro ao incluir. Tente novamente'); location ='/anuncios/geral'; </script>";
        endif;
    }

    public function listarFavoritosDoUsuarioLogado($idUsuario){

        $query = "SELECT f.idFavorito, f.idUsuario, f.idPostagem, v.id, v.descricao, v.titulo, v.marca, v.modelo, v.preco, v.usuarioAnunciante, v.imagemVeiculo, v.estadoVeiculo, v.status FROM favoritos f INNER JOIN veiculosanuncios v ON f.idPostagem = v.id";
        $stmt = Conexao::getConn()->prepare($query);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

     	else:
     		
     		return [];

     	endif;
    }

    public function removerAnuncio($idFavorito){

        $query = "DELETE FROM favoritos WHERE idFavorito = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $idFavorito);

        if($stmt->execute()):

            echo "<script>alert('Removido com sucesso'); location ='/anuncios/favoritos'; </script>";
        else:

            echo "<script>alert('Erro ao remover. Tente novamente'); location ='/anuncios/favoritos'; </script>";
            print_r($stmt->errorInfo());
        endif;
    }
}