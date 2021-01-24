<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'boot_pdo';
try{
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
}catch(Exception $ex){
    echo $ex->getMessage();
}
  include "./include/class_crud.php";
  $crud = new Crud($db);
?>