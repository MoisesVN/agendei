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
            <a href="../index.php" class="nav-link" class="" id="">
                <img  src="../Assets/img/Logo-Agendei01.jpeg" height="100" width="100" alt="" id="logo"> 
                <button id="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="collapse navbar-collapse "  id="n_bar"></div>
                <!-- <li class="nav-item" >
                    <a href="../Views/pesquisa.html" class="nav-link">Pesquisar</a>
                </li>
                 <li class="nav-item" >
                    <a href="" class="nav-link">Chat</a>
                </li>
                <li class="nav-item" >
                    <a href="../Views/login.html" class="nav-link">Login</a>
                </li> -->
                <li class="nav-item" >
                    <a href="../Back/PHP/logout.php" class="nav-link">Logout</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- text -->
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
      <?php 
        require '../Back/PHP/connect.php';
        
        $sql = "SELECT * FROM piscina";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="container"id="container">
        <div class="row"id="row">
          <div class="col" id="imagem"><img class="img1" src="<?php echo $row['img']; ?>" alt=""></div>
          <div class="col-sm-8"><p>Nome da piscina:
            <?php 
            echo $row['nome'];
            ?>
          </p><p>Endereço:
          <?php 
            echo $row['endereço'];
          ?>
          </p><p>Aluguel(R$):
          <?php 
            echo $row['aluguel'];
          ?>
          </p><p>Descrição:
          <?php 
            echo $row['descricao'];
          ?>
          </p><p>Funcionamento:
          <?php 
            echo $row['hFuncionamento'];
          ?>
          </p> <a href="../Views/pagamento.html"><button class="buttonUM" type="button">agendar</button> </a></div>
        </div>
      </div>
      <br>
      <?php 
        }
      ?>
      <script src="../Assets/js/agendando.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>