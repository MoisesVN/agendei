<?php
require 'connect.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
    $_SESSION['LOGIN'] = $login;
    header('location: ..\..\index.html');
}else{
    unset($_SESSION['login']);
    header('location: ..\..\Views\perfil.html');
}

?>