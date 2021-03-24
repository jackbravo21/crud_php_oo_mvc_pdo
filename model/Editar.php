<?php

class Editar
{
	protected $idportal;
	protected $nome;
	protected $senha;
	protected $email;
	protected $data;
	protected $dataedicao;

	public function Get($id)
	{
		$conecta = new Conexao();
		$conecta->conectar();

		$stmt = $conecta->conectar()->prepare("SELECT * FROM portal WHERE idportal = :ID");

		$stmt->bindParam(":ID", $id);

		$stmt->execute();

		while($lista = $stmt->fetch(PDO::FETCH_ASSOC))
		{
		$this->idportal			= $lista['idportal'];
		$this->nome				= $lista['nome'];
		$this->senha			= $lista['senha'];
		$this->email			= $lista['email'];
		$this->data				= $lista['data'];
		$this->dataedicao		= $lista['dataedicao'];
		}
	}

	public function exibirEditar()
	{
		$idportal		= $this->idportal;
		$nome			= $this->nome;
		$senha			= $this->senha;
		$email			= $this->email;
		$data			= $this->data;
		$dataedicao		= $this->dataedicao;

		include_once("view/editar.php");
	}

	public function SetEditar($id, $nome, $email, $senha)
	{
		$edicao = date("d/m/Y") . " as " . date("H:i");

		$conecta = new Conexao();
		$conecta->conectar();		

		$stmt = $conecta->conectar()->prepare("UPDATE portal SET nome = :LOGIN, email = :EMAIL, senha = :SENHA, dataedicao = :EDICAO WHERE idportal = :ID");

		$stmt->bindParam(":LOGIN", $nome);
		$stmt->bindParam(":EMAIL", $email);
		$stmt->bindParam(":SENHA", $senha);
		$stmt->bindParam(":EDICAO", $edicao);
		$stmt->bindParam(":ID", $id);

		$stmt->execute();

		header("location:index.php?op=exibir");
	}

}

?>