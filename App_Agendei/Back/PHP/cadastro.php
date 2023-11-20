<?php 


if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    //"addslashes()" - Essa função é usada para proteger dados de entrada de usuários contra ataques de injeção SQL.
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

}else{
    header("Location: App_Agendei\Views\cadastro.html");
    
}






?>