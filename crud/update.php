<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `usuario` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nome=$row['Nome'];
$email=$row['Email'];
$telefone=$row['Telefone'];
$senha=$row['Senha'];

if(isset($_POST['enviar'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];

    $sql="update `usuario` set ID='$id',Nome='$nome',Email='$email',Telefone='$telefone',Senha='$senha' 
    where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      // echo "updated successfully!";
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud operations</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-1">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" placeholder="Insira seu nome" name="nome" autocomplete="off" value=<?php
    echo $nome;?>>
  </div>
  <div class="mb-2">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Insira seu email" name="email" autocomplete="off" value=<?php
    echo $email;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Telefone</label>
    <input type="text" class="form-control" placeholder="(xx) 9xxxx-xxxx" name="telefone" autocomplete="off" value=<?php
    echo $telefone;?>>
  </div>
  <div class="mb-4">
    <label class="form-label">Senha</label>
    <input type="text" class="form-control" placeholder="Insira seu senha" name="senha" autocomplete="off" value=<?php
    echo $senha;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="enviar">Atualizar</button>
</form>
    </div>


  </body>
</html>