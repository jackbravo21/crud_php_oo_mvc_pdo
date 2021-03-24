


<br>
<p class="font-italic text-center"><b>Observação: </b>
Use os componentes a seguir para testar o CRUD em PHP7/PDO/MVC/OO.
</p>
<br>



<div class="container container-fluid col-6">


<div class="panel panel-primary">
      <div class="panel panel-heading">
        <center><h3><b>Editar Cadastro:</b></h3></center>
      </div>
      <div class="panel-body" width="95%">
        
<form action="index.php" name="registrar_usuario" method="post">
          <!-- {$alerta} -->

  <div class="form-group">

    <label for="exampleInputname1">Identificação do cadastro:</label>
<br>    
    <label class="font-weight-bold" for="exampleInputname2"><?php echo $idportal; ?></label>
<br>

    <label for="exampleInputname1">Nome do usuário:</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" placeholder="Nome do usuário para cadastro" value="<?php echo $nome; ?>" required>
<br>
    <label for="exampleInputEmail1">Endereço de email:</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Endereço de email para cadastro" value="<?php echo $email; ?>" required>
<br>
    <label for="exampleInputSenha1">Senha:</label>
     <small id="emailHelp" class="form-text text-muted float-right">Não use suas senhas reais para testar (apesar da criptografia)</small>
    <input type="password" class="form-control" name="senha" id="senha" aria-describedby="emailHelp" placeholder="Senha para cadastro" value="<?php echo $senha; ?>" required>

    <input type="hidden" class="form-control" name="idportal" id="idportal" aria-describedby="emailHelp" value="<?php echo $idportal; ?>">

<br><br>
  <center>
<input type="submit" name="BTN_editar" id="BTN_editar" value="Editar Cadastro" class="btn btn-primary">
<input type="reset" value="Limpar Dados" class="btn btn-danger">
<a href="index.php?op=exibir"><input type="button" name="btn_voltar" value="Cancelar/Voltar" class="btn btn-success"></a>
  </center>

        </form>
      </div>
    </div>
  </div>


</div>