<?php

class Exibir
{

	protected $id;
	protected $nome;
	protected $email;
	protected $data;
	protected $dataedicao;
	protected $contaresultados;

	public function Show()
	{
		$conecta = new Conexao();
		$conecta->conectar();

		$stmt = $conecta->conectar()->prepare("SELECT * FROM portal ORDER BY idportal ASC");

		$stmt->execute();

		$contar_resultados = $stmt->rowCount();

		include_once("view/tabela.php");
	}

	public function inserirDados($nome, $email, $senha)
	{
		$datacadastro 	= date("d/m/Y") . " as " . date("H:i");
		$edicao 		= "Nunca";

		$conecta = new Conexao();
		$conecta->conectar();
	
		$stmt = $conecta->conectar()->prepare("INSERT INTO portal( nome, email, senha, data, dataedicao) VALUES( :NOME, :EMAIL, :SENHA, :DATA, :EDICAO)");

		//$stmt->bindParam(":ID", $id);
		$stmt->bindParam(":NOME", $nome);
		$stmt->bindParam(":EMAIL", $email);
		$stmt->bindParam(":SENHA", $senha);
		$stmt->bindParam(":DATA", $datacadastro);
		$stmt->bindParam(":EDICAO", $edicao);

		$stmt->execute();

		echo "<script>location.replace('index.php?op=exibir');</script>";
	}
	
}

?>