
<br><br>

<h1 class="text-center">Tabela:</h1>

<div class="container container-fluid col-md-10 col-sm-11">

<table class="table table-striped fluid">
  <thead class="thead-dark">
    <tr>

      <th scope="col">#</th>
      <th scope="col">Nome:</th>
      <th scope="col">Email:</th>
      <th scope="col">Data de inserção:</th>
      <th scope="col">Data de edição:</th>
      <th scope="col">Editar/Excluir</th>
    </tr>
  </thead>

<h6 class="text-right"><b>Total de registros:</b> <?php echo $contar_resultados; ?></h6>

<tr>

<?php
while($lista = $stmt->fetch(PDO::FETCH_ASSOC))
{
?>

<td><?php echo $lista['idportal']; ?></td>
<td><?php echo $lista['nome']; ?></td>
<td><?php echo $lista['email']; ?></td>
<td><?php echo $lista['data']; ?></td>
<td><?php echo $lista['dataedicao']; ?></td>
<td>
<a href="index.php?op=editar&id=<?php echo $lista['idportal']; ?>
"><i class="far fa-edit"></i>
</a>&nbsp &nbsp &nbsp
<a href="index.php?op=excluir&id=<?php echo $lista['idportal']; ?>
" style="color:red"><i class="far fa-trash-alt"></i></a></td>
</tr>

<?php
}
?>

 </table>