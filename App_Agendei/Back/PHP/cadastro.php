<?php 
require 'connect.php';

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    //"addslashes()" - Essa função é usada para proteger dados de entrada de usuários contra ataques de injeção SQL.
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

}else{
    header("Location: App_Agendei\Views\cadastro.html");
    
}
//cadastro no banco começa aqui
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//chegar se o email já esta cadastrado
$sql = "SELECT * FROM usuario WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
    header('location: ..\..\Views\cadastro.html');
}else{
    //gravando no banco
    $sql1 = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $result1 = mysqli_query($conn, $sql1);

    if($result1){
        header('location: ..\..\Views\perfil.html');
    }else{
        header('location: ..\..\Views\cadastro.html');
    }
}

?>