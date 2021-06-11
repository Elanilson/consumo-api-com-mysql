<?php
class postagemService{
	private $conexao;
	private $postagem;


public function __construct(Conexao $conexao, Postagem $postagem){
	$this->conexao =$conexao->conectar();
	$this->postagem = $postagem;
}

public function salvar (){
	try{
		$query = 'INSERT INTO tb_postagens (id,titulo,texto)
	VALUES(:id,:titulo,:texto)'; 
	$stmt = $this->conexao->prepare($query);
	$stmt->bindValue(':id',$this->postagem->__get('id'));
	$stmt->bindValue(':titulo',$this->postagem->__get('titulo'));
	$stmt->bindValue(':texto',$this->postagem->__get('texto'));
	$stmt->execute();
	 echo 'Salvo com sucesso!';
	}catch(Exception $e){
			echo "<p>".$e->getMessage()."</p>";

		}

}

public function listar (){
	$query = 'SELECT * FROM tb_postagens';
	$stmt=$this->conexao->prepare($query);
	$stmt->execute();
	return $stmt->FetchAll(PDO::FETCH_OBJ);
}
public function listarPorPagina ($limit, $offset){
	$query = "SELECT * FROM tb_postagens LIMIT $limit OFFSET $offset";
	$stmt=$this->conexao->prepare($query);
	$stmt->execute();
	return $stmt->FetchAll(PDO::FETCH_OBJ);
}
public function totalRegistro (){
	$query = "SELECT COUNT(*) AS total FROM tb_postagens";
	$stmt=$this->conexao->prepare($query);
	$stmt->execute();
	return $stmt->Fetch(\PDO::FETCH_ASSOC);
}
public function remover(){
		$query = 'DELETE FROM tb_postagens WHERE id =:id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id',$this->postagem->__get('id'));
		$stmt->execute();
	}


}

?>