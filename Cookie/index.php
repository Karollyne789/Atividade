<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="name">
    <button type="submit">log</button>
    </form>
</body>
</html>
<?php
error_reporting(0);
$nome = $_POST['name'];
if(isset($nome)){
    setcookie('cookie',$nome,time() + 3600);
    header("location: oi.php");
}else{
    echo "registre-se";
}
?>