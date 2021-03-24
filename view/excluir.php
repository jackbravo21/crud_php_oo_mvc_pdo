<br>
<p class="font-italic text-center"><b>Observação: </b>
Use os componentes a seguir para testar o CRUD em PHP7/PDO/MVC/OO.
</p>
<br>

<div class="container container-fluid col-6">

<div class="panel panel-primary">
      <div class="panel panel-heading">
        <center><h3><b>Excluir Cadastro:</b></h3></center>
      </div>
      <div class="panel-body" width="95%">
        
<form action="index.php" name="registrar_usuario" method="POST">
          <!-- {$alerta} -->

  <div class="form-group">

   <p><h2 class="text-center">Deseja mesmo excluir o usuário? <h2><h3 class="text-center" style="color:red"><b>
   <?php echo $nome; ?> 
   = 
   <?php echo $email; ?>
     
   </b></h3></p>

    <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?php echo $id; ?>">

<br>
  <center>
<input type="submit" name="BTN_excluir" id="BTN_excluir" value="Excluir Cadastro" class="btn btn-danger">
<a href="index.php?op=exibir"><input type="button" name="btn_voltar" value="Cancelar/Voltar" class="btn btn-success"></a>
  </center>

        </form>
      </div>
    </div>
  </div>

</div>
