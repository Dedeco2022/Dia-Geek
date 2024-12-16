<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dia Geek</title>
  <link rel="shortcut icon" type="image/png" href="fotos/geek.png" />
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- CSS customizado -->
  <style>
    body {
      position: relative;
      background-color: rgb(205, 205, 205);
      height: 100%;
      margin-top: auto;
      display: flex;
      flex-direction: column;
      font-family: Arial, Helvetica, sans-serif;
    }

    .img-dia-gk {
      width: 205px;
      height: auto;
    }

    .img-logo-iff {
      width: 250px;
      height: auto;
    }

    /*Aumenta os items do carrossel*/
    .carousel .carousel-item {
      width: 500px;
      height: 400px;
    }

    /*O card ocupa todo o espaço disponivel*/
    .carousel .card {
      width: 100%;
      height: 100%;
      margin: 0;
    }

    /*Ajusta a altura das imagens*/
    .carousel .card .card-image img {
      height: 300px;
      object-fit: cover;
    }

    .texto {
      color: black;
    }
  </style>

</head>

<body>

  <!-- Barra de Navegação -->
  <nav class="navbar orange">
    <div class="nav-wrapper"> <a href="index.php" class="brand-logo"> <img src="fotos/DIA G K.png" class="img-dia-gk"> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" id="times-btn">Convide alguém!</a></li>
      </ul>
    </div>
  </nav>


  <div class="container">
    <h4> <a class="btn-floating light green"><i class="material-icons">location_on</i></a> Local: Instituto Federal Farroupilha - Campus Uruguaiana</h4>
    <h4> <a class="btn-floating light green"><i class="material-icons">date_range</i></a> Dia: 25/01/2025</h4>
    <h4> <a class="btn-floating light green"><i class="material-icons">videogame_asset</i></a> Atrações:</h4>
  </div>


  <!-- Carrossel com Cards -->
  <div class="container">
    <div class="carousel">
      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/geek.png"> <span class="card-title">
              <div class="texto">Campeonato de Counter Strike 1.6</div>
            </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/rBDZ2u8bR1HHepKb9"> Inscreva-se!</a><br>
            <p>Sala: </p><br>
            <p>Horário: </p><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example1.png"> <span class="card-title">
              <div class="texto">Campeonato de Free fire</div>
            </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/SgQXy9ro2ZMyK34S8"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example2.png"> <span class="card-title">
              <div class="texto">Campeonato de Mortal Kombat 9.</div>
            </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/4E1Vz8BMqv3kHX9G7"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example2.png"> <span class="card-title">
              <div class="texto">Campeonato de Dragon Ball Budokai Tenkaichi 3.</div>
            </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/USXtnKekYfKTRa3E7"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>

        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example2.png"> <span class="card-title">
              <div class="texto">Concurso de Cosplay.</div>
            </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/JH6hzBn5HXSCRxAp8"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>

  <!-- Rodapé -->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">

        <div class="col l6 s12">
          <h5 class="white-text"> <img src="fotos/DIA G K.png"> </h5>
          <p class="grey-text text-lighten-4"> Prática Pedagógica Integrada (PPI) da turma INFO31 - 2024</p>
        </div>

        <div class="col l4 offset-l2 s12">
          <h5 class="white-text"> <img src="fotos/logoIFF.png" class="img-logo-iff"> </h5>
          <ul>
            <li><a class="btn-floating btn-small waves-effect waves-light green" href="https://www.instagram.com/iffar_uruguaiana?igsh=OTYzZ2hrbWU3ZjJj"><i class="material-icons">camera_alt</i> </a> <a href="https://www.instagram.com/iffar_uruguaiana?igsh=OTYzZ2hrbWU3ZjJj" class="white-text text-lighten-3"> Instagram IFFar Ug </a> </li><br>
            <li><a class="btn-floating btn-small waves-effect waves-light green" href="https://www.instagram.com/diageekiffar?igsh=bWh4dnJlcGN3cWl4"><i class="material-icons">camera_alt</i> </a> <a href="https://www.instagram.com/diageekiffar?igsh=bWh4dnJlcGN3cWl4" class="white-text text-lighten-3"> Instagram do evento </a> </li><br>
            <li><a class="btn-floating btn-small waves-effect waves-light green" href="https://www.instagram.com/info31.iffar?igsh=cmdtNXVkMDZucDBx"><i class="material-icons">camera_alt</i> </a> <a href="https://www.instagram.com/info31.iffar?igsh=cmdtNXVkMDZucDBx" class="white-text text-lighten-3"> Instagram INFO31 2024</a> </li>
          </ul>
        </div>

      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        © 2024 Instituto Federal Farroupilha - Campus Uruguaiana
        <a class="grey-text text-lighten-4 right">Desenvolvedores: Bruno de Lima Jorge & Maria Clara Gomes</a>
      </div>
    </div>
  </footer>

  <!-- Importando o Materialize JavaScript e o JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.carousel');
      M.Carousel.init(elems, {
        fullWidth: false,
        indicators: true
      });
    });
  </script>

</body>

</html>