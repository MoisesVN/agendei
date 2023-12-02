<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/agendamento.css">
    <link rel="stylesheet" href="../Assets/css/geral.css">
  <link rel="stylesheet" href="agendamento.css">   
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg " id="navbar">
        <div class="conteiner-fluid" id="conteiner">      
            <ul class="navbar-nav navbar-brand " > 
            <a href="../index.html" class="nav-link" class="" id="">
                <img  src="../Assets/img/Logo-Agendei01.jpeg" height="100" width="100" alt="" id="logo"> 
                <button id="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="button">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="collapse navbar-collapse "  id="n_bar"></div>
                <li class="nav-item" >
                    <a href="../Views/pesquisa.html" class="nav-link">Pesquisar</a>
                </li>
                <!-- <li class="nav-item" >
                    <a href="" class="nav-link">Chat</a>
                </li> -->
                <li class="nav-item" >
                    <a href="../Views/login.html" class="nav-link">Login</a>
                </li>
                <li class="nav-item" >
                    <a href="../Views/perfil.html" class="nav-link">Perfil</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <h1>AGENDEI.COM</h1>
    <div class="container justify-content-center" id="container">
        <div class="row" id="row">
          <div class="col-sm-3, col-lg-3">
            <form action="../Back/PHP/agendamento.php" method="post">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>selecione um bairro</option>
              <option value="1">Salgado</option>
              <option value="2">Petrópolis</option>
              <option value="3">Universitário</option>
              <option value="4">kennedy</option>
              <option value="5">Nossa Senhora das Dores</option>
              <option value="6">Nova Caruaru</option>
            </select>
          </div>
          <div class="col-sm-3, col-lg-3">
            <input class="Data" type="date" name="" id="">
          </div>
          <div class="col-sm-3, col-lg-3">
           <b>Quantidade de Pessoas:</b><input class="number" type="number" name="" id="">
          </div>
          <div class="col-sm-3, col-lg-3" id="BOTAO">
            <a href="../Views/pesquisa.html"><button class="buttonDOIS" type="submit"><h6>Pesquisar</h6></button></a>
          </div>
        </div>
      </div>
      </form>
      <br>
      <div class="container"id="container">
        <div class="row"id="row">
          <div class="col" id="imagem"><img class="img1" src="https://th.bing.com/th/id/R.baf8c0e88a7eb358f52674564a3aef05?rik=OL8wZkLCD5enHA&riu=http%3a%2f%2fwww.decorfacil.com%2fwp-content%2fuploads%2f2017%2f05%2f20170518piscina-de-vinil-1.jpg&ehk=k1GM%2bSvjiRGXPnH%2bVR%2bfXHbP5HCM6AaZtOAMvUq%2b0kA%3d&risl=&pid=ImgRaw&r=0" alt=""></div>
          <div class="col-sm-8"><p>Nome da piscina:</p><p>Endereço:</p><p>Nota:</p> <br> <br> <br> <a href="../Views/pagamento.html"><button class="buttonUM" type="button">agendar</button> </a></div>
        </div>
      </div>
      <br>
      <div class="container"id="container">
        <div class="row"id="row">
          <div class="col"id="imagem"><img class="img1" src="https://www.decorfacil.com/wp-content/uploads/2016/11/20161104imagem24.jpg" alt=""></div>
          <div class="col-sm-8"><p>Nome da piscina:</p><p>Endereço:</p><p>Nota:</p> <br> <br> <br><a href="../Views/pagamento.html"><button class="buttonUM" type="button">agendar</button> </a></div>
        </div>
      </div>
      <br>
      <div class="container"id="container">
        <div class="row" id="row">
          <div class="col"id="imagem"><img class="img1" src="https://th.bing.com/th/id/OIP.-MwWXW4lh-kx_bJK2egmvwHaE8?pid=ImgDet&rs=1" alt=""></div>
          <div class="col-sm-8"><p>Nome da piscina:</p><p>Endereço:</p><p>Nota:</p><br> <br> <br><a href="../Views/pagamento.html"><button class="buttonUM" type="button">agendar</button> </a></div>
        </div>
      </div>
         <script src="../App_Agendei\Assets\jsApp_Agendei\Assets\js\agendando.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
