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
    /* Faz com que a página ocupe 100% da altura */
    html,
    body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    /* Faz o container principal expandir */
    .container {
      flex: 1;
    }

    /* Garante que o footer fica no final */
    footer {
      margin-top: auto;
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
  </style>

</head>

<body> <!-- Barra de Navegação -->
  <nav class="navbar orange">
    <div class="nav-wrapper"> <a href="index.php" class="brand-logo"> <img src="fotos/DIA G K.png" class="img-dia-gk"> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" id="times-btn">Convide alguém!</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <!-- Carrossel com Cards -->
    <div class="carousel">
      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/geek.png"> <span class="card-title">Campeonato de Counter Strike 1.6 </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/rBDZ2u8bR1HHepKb9"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example1.png"> <span class="card-title">Campeonato de Free fire</span> </div>
          <div class="card-content">
            <a href="https://forms.gle/SgQXy9ro2ZMyK34S8"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example2.png"> <span class="card-title">Campeonato de Mortal Kombat 9.</span> </div>
          <div class="card-content">
            <a href="https://forms.gle/4E1Vz8BMqv3kHX9G7"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example2.png"> <span class="card-title">Campeonato de Dragon Ball Budokai Tenkaichi 3.</span> </div>
          <div class="card-content">
            <a href="https://forms.gle/USXtnKekYfKTRa3E7"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>

        </div>
      </div>

      <div class="carousel-item">
        <div class="card">
          <div class="card-image"> <img src="fotos/example2.png"> <span class="card-title">Concurso de Cosplay. </span> </div>
          <div class="card-content">
            <a href="https://forms.gle/JH6hzBn5HXSCRxAp8"> Inscreva-se!</a><br>
            <p>Mais informações geek.</p><br>
          </div>
        </div>
      </div>
    </div>
  </div>

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
      <div class="container"> © 2024 Instituto Federal Farroupilha - Campus Uruguaiana <a class="grey-text text-lighten-4 right">Desenvolvedores: Bruno de Lima Jorge & Maria Clara Gomes</a> </div>
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