<?php

class Excluir
{

	protected $id;
	protected $nome;
	protected $email;

	public function getExcluir($id)
	{

		$conecta = new Conexao();
		$conecta->conectar();
		
		$stmt = $conecta->conectar()->prepare("SELECT * FROM portal WHERE idportal = :ID");

		$stmt->bindParam(":ID", $id);

		$stmt->execute();

		while($lista = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$this->id 		= $lista['idportal'];
			$this->nome 	= $lista['nome'];
			$this->email 	= $lista['email'];
		}			

		$id 		= $this->id;
		$nome 		= $this->nome;
		$email 		= $this->email;

		include_once("view/excluir.php");

	}

	public function setExcluir()
	{
		$id 		= $this->id;
		$nome 		= $this->nome;

		$conecta = new Conexao();
		$conecta->conectar();

		$stmt = $conecta->conectar()->prepare("DELETE FROM portal WHERE idportal = :ID");

		$stmt->bindParam(":ID", $id);

		$stmt->execute();

		echo "<script>alert('Usuário  \"".$nome. "\"  EXCLUÍDO!'); location.replace('index.php?op=exibir');</script>";
	}
}

?>