<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
  <input type="text" name="email" placeholder="email">
  <input type="text" name="senha" placeholder="senha">
  <button type="submit">
  logar
  </button>

  
  </form>
</body>
</html>
<?php
error_reporting(0);
session_start();
$login = $_POST['email'];
$senha = $_POST['senha'];
if(isset($login)&& isset($senha)){
  $_SESSION['log']=$_POST['email'];
  header("location: login.php");
}else{
  echo "cadastre-se";
}

?>