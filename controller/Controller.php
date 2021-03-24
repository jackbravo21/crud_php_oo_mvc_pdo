<?php

include_once("model/Conexao.php");

class Controller
{

	public function ControllerExibir()
	{
		include_once("view/inserir.php");
		include_once("model/Exibir.php");
		$crud = new Exibir();
		$crud->Show();
	}

	public function ControllerInserir($nome, $email, $senha)
	{
		include_once("model/Exibir.php");
		$crud = new Exibir();
		$crud->inserirDados($nome, $email, $senha);
	}

	public function ControllerEditar($id)
	{
		include_once("model/Editar.php");
		$crud = new Editar();
		$crud->Get($id);
		$crud->exibirEditar();

		include_once("model/Exibir.php");
		$crud = new Exibir();
		$crud->Show();
	}

	public function ControllerExcluir($id)
	{
		include_once("model/Excluir.php");
		$crud = new Excluir();
		$crud->getExcluir($id);

		include_once("model/Exibir.php");
		$crud = new Exibir();
		$crud->Show();
	}

	public function confirmarEdicao($id, $nome, $email, $senha)
	{
		include_once("model/Editar.php");
		$crud = new Editar();
		$crud->SetEditar($id, $nome, $email, $senha);
	}

	public function confirmarExclusao($id)
	{
		include_once("model/Excluir.php");
		$crud = new Excluir();
		$crud->getExcluir($id);
		$crud->setExcluir();
	}

}

?>