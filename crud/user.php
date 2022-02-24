<?php
include 'connect.php';
if(isset($_POST['enviar'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];

    $sql="insert into `usuario` (Nome,Email,Telefone,Senha)values('$nome','$email','$telefone','$senha')";
    $result=mysqli_query($con,$sql);
    if($result){
      // echo "Data inserted successfully!";
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud operations</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-1">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" placeholder="Insira seu nome" name="nome" autocomplete="off">
  </div>
  <div class="mb-2">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Insira seu email" name="email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="(xx) 9xxxx-xxxx" name="telefone" autocomplete="off">
  </div>
  <div class="mb-4">
    <label class="form-label">Senha</label>
    <input type="text" class="form-control" placeholder="Insira seu senha" name="senha" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
</form>
    </div>


  </body>
</html>