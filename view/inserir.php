
<br>
<p class="font-italic text-center"><b>Observação: </b>
Use os componentes a seguir para testar o CRUD em PHP7/PDO/MVC/OO.
</p>
<br>

<div class="container container-fluid col-6">

<div class="panel panel-primary">
			<div class="panel panel-heading">
				<center><h3><b>Adicionar Cadastro:</b></h3></center>
			</div>
			<div class="panel-body" width="95%">
				
<form action="index.php?op=inserir" name="registrar_usuario" method="post">
					<!-- {$alerta} -->

	<div class="form-group">

    <label for="exampleInputname1">Nome do usuário:</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" placeholder="Nome do usuário para cadastro" required>
<br>
    <label for="exampleInputEmail1">Endereço de email:</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Endereço de email para cadastro" required>
<br>
    <label for="exampleInputSenha1">Senha:</label>
     <small id="emailHelp" class="form-text text-muted float-right">Não use suas senhas reais para testar (apesar da criptografia)</small>
    <input type="password" class="form-control" name="senha" id="senha" aria-describedby="emailHelp" placeholder="Senha para cadastro" required>

<br><br>
	<center>
<input type="submit" name="BTN_inserir" id="BTN_inserir" value="Inserir Cadastro" class="btn btn-primary">
<input type="reset" value="Limpar Dados" class="btn btn-danger">
	</center>

				</form>
			</div>
		</div>
	</div>


</div>







  
