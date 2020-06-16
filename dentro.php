<?php


session_start();


if( !isset($_SESSION["logado"]) || $_SESSION["logado"] != true ){
header("Location: index.php");

die();
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>You are login</title>
  </head>
  <body>

   <a href="sair.php" >sair</a>


  </body>
</html>
