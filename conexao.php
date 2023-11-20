<?php 

$localhoste = "localhost";
$user = "root";
$password = ""; //colocar a senha que você usar para acesar o mysql workbench dentro das ""
$banco = "db_agendei";

try{
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhoste, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERRO: ".$e->getMessage();
    exit;
}




?>