<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);

$sgbd="mysql";
$host="localhost";
$dbname="pedrobancodados";
$user="";
$pass="";


$db = mysqli_connect($host, $user, $pass, $dbname);


if( isset($_POST["email"]) && isset($_POST["senha"]) ){
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuarios WHERE email = '$email'";

  $query = $db->query($sql);

  print_r($query);


  if($query){
  if($query->num_rows != 0){
  $row = $query->fetch_assoc();

  /**
  * Pegou o valor da senha guardado no banco de dados.
  */
  $db_senha = $row["senha"];
  echo $db_senha;

  // if( $db_senha == hash("md5", $senha) ){      caso queira usar o ash
    if( $db_senha == $senha ){
      session_start();
  $_SESSION["logado"] = true;
  header("Location: dentro.php");
      }
    }
  }

  }





?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projecto PHP</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

  <h1> Pedro <strong>DateBase</strong> Login Php & MySql<h1>
    <form method="post" action="index.php">
        <input type="text"     name="email" placeholder="e-mail"    /><br>
        <input type="password" name="senha" placeholder="senha" /><br>
        <input type="submit" value="entrar" />
    </form>

</br>
</br>
</br>
</br>
</br>
</br>

    <div class="bottom-container">
      <a class="footer-link" href="https://www.linkedin.com/in/pedro-zenha/">LinkedIn</a>
      <a class="footer-link" href="https://github.com/pedroiki?tab=repositories">GitHub</a>
      <p>&copy; 2020 Carlos Pedro Gomes -Web Developer.</p>
    </div>
 </body>
</html>
