<?php 
// coneção orientada a objeto
//link 1: https://www.youtube.com/watch?v=M6oi90Q7gd8
//link 2: https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG
$localhoste = "localhost";
$user = "root";
$password = ""; //colocar a senha que você usar para acesar o mysql workbench dentro das ""
$banco = "db_agendei";

$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhoste, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM pessoa");
$sql->execute();

echo $sql->rowCount(); // esse comanado mostrar o numero do linhas da tabela pessoa

?>