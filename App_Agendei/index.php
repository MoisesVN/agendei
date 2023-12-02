<?php
session_start();

if((!isset($_SESSION['login']))){
    header('location:Views\perfil.html');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendei.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/geral.css">
    <link rel="stylesheet" href="Assets/css/index.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg " id="navbar">
            <div class="conteiner-fluid" id="conteiner">      
                <ul class="navbar-nav navbar-brand " > 
                <a href="./index.php" class="nav-link" class="" id="">
                    <img  src="./Assets/img/Logo-Agendei01.jpeg" height="100" width="100" alt="" id="logo"> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="button">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                </a>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="collapse navbar-collapse "  id="n_bar"></div>
                    <li class="nav-item" >
                        <a href="../App_Agendei/Views/agendando.php" class="nav-link">Pesquisar</a>
                    </li>
                    <!-- <li class="nav-item" >
                        <a href="" class="nav-link">Chat</a>
                    </li> -->
                    <li class="nav-item" >
                        <a href="Back/PHP/logout.php" class="nav-link">Logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Assets/img/slide-index/piscina01.png" class="d-block w-100" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="Assets/img/slide-index/piscina02.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Assets/img/slide-index/piscina03.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <section class="conteudo">
        <div class="texto">
            <!-- <p>texto exemplo</p> -->
        </div>
    </section>
    <br>
    <footer>
        <div class="interface_footer">
            <ul>
                <li><a href="#">Como trabalhamos</a></li>
                <li><a href="#">Sobre AGENDEI.com</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
