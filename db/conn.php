<?php
  $db_host = '127.0.0.1:8889';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'form_db';

  $charset = 'utf8mb4';
 
  $dsn = "mysql:host=$db_host,dbname:$db_db,charset:$charset";

  try{
    $pdo = new PDO($dsn, $db_user, $db_password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo 'BOOM!';
  } catch(PDOException $e) {
    echo "<h1 class='text-danger'>Unable to connect to the database at this time</h1>";
    //throw new PDOException($e->getMessage());
  }

  require_once 'crud.php';
  $crud = new crud($pdo);


?>