<?php

include_once("./controller/Controller.php");

include_once("view/top.php");

$usuario = new Controller();

if(isset($_GET["op"]) && $_GET["op"]=="exibir")
{
	$usuario->ControllerExibir();
}

else if(isset($_GET["op"]) && $_GET["op"]=="editar")
{
	$id = $_GET["id"];
	$usuario->ControllerEditar($id);
}

else if(isset($_GET["op"]) && $_GET["op"]=="excluir")
{
	$id = $_GET["id"];
	$usuario->ControllerExcluir($id);
}

else if(isset($_GET["op"]) && $_GET["op"]=="inserir")
{
	//Inserir
	if(isset($_POST["BTN_inserir"]))
	{
		$nome 		= $_POST["nome"];
		$email 		= $_POST["email"];
		$senha 		= sha1($_POST["senha"]);
		$usuario->ControllerInserir($nome, $email, $senha);
	}

	else if(empty($_POST))
	{
		echo "<script>location.replace('index.php?op=exibir');</script>";
	}

	else
	{
		echo "<script>location.replace('index.php?op=exibir');</script>";
	}
}

//Editar
else if(isset($_POST["BTN_editar"]))
{
	$id 	 		= $_POST["idportal"];
	$nome 			= $_POST["nome"];
	$email 			= $_POST["email"];
	$senha 			= sha1($_POST["senha"]);
	$usuario->confirmarEdicao($id, $nome, $email, $senha);
}

//Excluir
else if(isset($_POST["BTN_excluir"]))
{
	$id 		= $_POST["id"];
	$usuario->confirmarExclusao($id);
}

else if(empty($_GET) && empty($_POST))
{
	echo "<script>location.replace('index.php?op=exibir');</script>";	
}

include_once("view/bot.php");

?>