<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Clientes</title>


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- <script src="clientes.php/jquery.mask.min.js"></script> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

</head>


<body>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="painel_funcionario.php"><big><big><i class="fa fa-arrow-left"></i></big></big></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
<div class="container">
      <br>
         <div class="row">
           <div class="col-sm-12">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalExemplo">Inserir Novo </button>
           </div>
        </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Tabela de Clientes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <?php 
                    $query = "select * from clientes order by nome asc";

                    $result = mysqli_query ($conexao, $query);
                    // $usuario =  mysqli_fetch_array ($result);
                    $row = mysqli_num_rows ($result);
                        if($row == ''){
                          echo "<h3>Não existem dados no banco </h3>";
                        } else {
                        ?>  
                    <table class="table">
                        <thead class=" text-primary">
                          <th>
                            Nome
                          </th>
                          <th>
                            Telefone
                          </th>
                          <th>
                            Endereço
                          </th>
                           <th>
                            Email
                          </th>
                            <th>
                            CPF
                          </th> 
                          <th>
                            Nivel
                          </th>
                          <th>
                            Acoes
                          </th>
                          
                        </thead>
                        <tbody>
                         
                        <?php 
                        while ($res_1 = mysqli_fetch_array($result)){
                          $nome = $res_1["nome"];
                          $telefone = $res_1["telefone"];
                          $endereco = $res_1["endereco"];
                          $email = $res_1["email"];
                          $cpf = $res_1["cpf"];
                          $nivel = $res_1["nivel"];
                          $id = $res_1["id"];
                          ?>

                          <tr>
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $telefone; ?></td>
                            <td><?php echo $endereco; ?></td>
                            <td><?php echo $email;; ?></td>
                            <td><?php echo $cpf; ?></td>
                            <td><?php echo $nivel; ?></td>
                            <td>
                              <a class="btn btn-info" href="clientes.php?func=edita&id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                              <a class="btn btn-danger" href="clientes.php?func=deleta&id=<?php echo $id; ?>"><i class="fa fa-minus-square"></i></a>
                            </td>
                            <?php
                        }
                        ?>
                        </tbody>
                      </table>
                        <?php
                        }
                        ?>
                    </div>
                  </div>
                </div>
              </div>

</div>




 <!-- Modal -->
      <div id="modalExemplo" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">Clientes</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" > 
              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="nome" placeholder="Nome" required>
              </div>
              <div class="form-group">
                <label for="id_produto">Telefone</label>
                <input type="text" class="form-control mr-2" name="telefone" id="telefone" placeholder="Telefone" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Endereço</label>
                <input type="text" class="form-control mr-2" name="endereco" placeholder="Endereço" required>
              </div>
               <div class="form-group">
                <label for="fornecedor">Email</label>
                 <input type="email" class="form-control mr-2" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="fornecedor">CPF</label>
                 <input type="text" class="form-control mr-2" name="cpf" id="cpf" placeholder="CPF" required>
              </div>

                <div class="form-group" style= "margin-bottom:0px">
                <label for="fornecedor">Nivel</label>
              </div>
                  <select class="form-control mr-2" name="nivel" aria-label="Default select example">
                    <option selected>Selecione um nivel</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                  </select>

              
            </div>
            
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="salvar">Salvar </button>


                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
                </form>
            </div>
          </div>
        </div>
      </div>    
</body>
</html>

<!-- Cadastrar -->

<?php 
if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf']; 
    $nivel = $_POST['nivel']; 


    // / Verifica se o CPF ja esta cadastrado
    $query_verificar = "select * from clientes where cpf = '$cpf'";
    $result_verificar = mysqli_query ($conexao, $query_verificar);
    $row_verificar = mysqli_num_rows ($result_verificar);

if($row_verificar > 0) {
    echo "<script language='javascript'> window.alert('CPF Já cadastrado'); </script>";
    exit();
}
    $query = "INSERT into clientes (nome, telefone, endereco, email, cpf, nivel, data_cadastro) VALUES ('$nome', '$telefone', '$endereco', '$email', '$cpf', '$nivel', curDate())";
    $result = mysqli_query ($conexao, $query);
        if($result == ''){
            echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar'); </script>";
        } else {
            echo "<script language='javascript'> window.alert('Salvo com Sucesso'); </script>";
            echo "<script language='javascript'> window.location='clientes.php'; </script>";
}
}
?>


<!-- Exluir Registro -->
<?php 
if(@$_GET['func'] == 'deleta'){
  $id = $_GET['id'];
  $query = "DELETE FROM clientes where id = '$id'";
  mysqli_query($conexao,$query);
  echo "<script language='javascript'> window.alert('Registro excluido com sucesso'); </script>";
  echo "<script language='javascript'> window.location='clientes.php'; </script>";
}
?>


<!-- Edita Registro -->
<?php 
if(@$_GET['func'] == 'edita'){ 
$id = $_GET['id'];
  $query = "select * from clientes where id = '$id'";
                    $result = mysqli_query ($conexao, $query);
                                            while ($res_1 = mysqli_fetch_array($result)){
      
?>
<!-- Modal Editar-->
      <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">Clientes</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" > 
              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="nome" placeholder="Nome" value="<?php echo $res_1['nome'] ?>" required>
              </div>
              <div class="form-group">
                <label for="id_produto">Telefone</label>
                <input type="text" class="form-control mr-2" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo $res_1['telefone'] ?>" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Endereço</label>
                <input type="text" class="form-control mr-2" name="endereco" placeholder="Endereço" value="<?php echo $res_1['endereco'] ?>" required>
              </div>
               <div class="form-group">
                <label for="fornecedor">Email</label>
                 <input type="email" class="form-control mr-2" name="email" placeholder="Email" value="<?php echo $res_1['email']; ?>" required>
              </div>
              <div class="form-group">
                <label for="fornecedor">CPF</label>
                 <input type="text" class="form-control mr-2" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $res_1['cpf'] ?>" required>
              </div>
              <div class="form-group" style= "margin-bottom:0px">
                <label for="fornecedor">Nivel</label>
              </div>
                  <select class="form-control mr-2" name="nivel" aria-label="Default select example">
                    <option selected>Selecione um nivel</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                  </select>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="editar">Editar</button>


                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
                </form>
            </div>
          </div>
        </div>
      </div>    

<script> $("#modalEditar").modal("show");</script>

   

   <!-- Comando de editar -->

<?php 
if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf']; 
    $nivel = $_POST['nivel'];

    if($res_1['cpf'] != $cpf) {


    // / Verifica se o CPF ja esta cadastrado
    $query_verificar = "select * from clientes where cpf = '$cpf'";
    $result_verificar = mysqli_query ($conexao, $query_verificar);
    $row_verificar = mysqli_num_rows ($result_verificar);

if($row_verificar > 0) {
    echo "<script language='javascript'> window.alert('CPF Já cadastrado'); </script>";
    exit();
}
}
    $query_editar = "UPDATE clientes set nome = '$nome',telefone = '$telefone', endereco = '$endereco', email = '$email', cpf = '$cpf', nivel = '$nivel' where id = '$id' ";
    $result_editar = mysqli_query ($conexao, $query_editar);
        if($result_editar == ''){
            echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar'); </script>";
        } else {
            echo "<script language='javascript'> window.alert('Edicao com Sucesso'); </script>";
            echo "<script language='javascript'> window.location='clientes.php'; </script>";
}
}
?>

<?php 
} }
?>