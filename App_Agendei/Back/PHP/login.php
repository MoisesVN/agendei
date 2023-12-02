<?php
session_start();

require 'connect.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
    $_SESSION['login'] = $login;
    header('location: ..\..\index.php');
}else{
    unset($_SESSION['login']);
    header('location: ..\..\Views\perfil.html');
}

?>