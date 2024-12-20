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

  <style>
    @font-face {
      font-family: 'RacingSansOne';
      src: url('fonte/RacingSansOne-Regular.ttf') format('truetype');
      font-style: normal;
      font-weight: normal;
    }

    body {
      position: relative;
      background-color: #d4d4d4;
      height: 100%;
      margin-top: auto;
      display: flex;
      flex-direction: column;
    }

    .titulos{
      font-family: RacingSansOne, sans-serif;
      color: orange;
      border-radius: black 1px;
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
    <h1 class="titulos">INFORMAÇÕES DO EVENTO</h1>
    <h4> <a class="btn-floating light green"><i class="material-icons">location_on</i></a> Local: Instituto Federal Farroupilha - Campus Uruguaiana</h4>
    <h4> <a class="btn-floating light green"><i class="material-icons">date_range</i></a> Dia: 25/01/2025</h4>
    <h1 class="titulos">ATRAÇÕES</h1><br>
  </div>


  <div class="container">
    <div class="carousel">
      <div class="carousel-item"><img src="fotos/justDance.png"><span class="card-title">Just Dance</span></div>
      <div class="carousel-item"><img src="fotos/twister.png"><span class="card-title">Twister</span></div>
      <div class="carousel-item"><img src="fotos/cs.png"><span class="card-title">Campeonato de Counter Strike 1.6</span></div>
      <div class="carousel-item"><img src="fotos/exposicao.png"><span class="card-title">Exposição de software opensource</span></div>
      <div class="carousel-item"><img src="fotos/MK9.png"><span class="card-title">Campeonato de MortalKombat 9</span></div>
      <div class="carousel-item"><img src="fotos/MK11.png"><span class="card-title">Campeonato de MortalKombat 11</span></div>
      <div class="carousel-item"><img src="fotos/RPG.png"><span class="card-title">RPG</span></div>
      <div class="carousel-item"><img src="fotos/anime.png"><span class="card-title">Animes</span></div>
      <div class="carousel-item"><img src="fotos/palestra.png"><span class="card-title">Palestra</span></div>
      <div class="carousel-item"><img src="fotos/quiz.png"><span class="card-title">Quiz</span></div>
      <div class="carousel-item"><img src="fotos/tabuleiro.png"><span class="card-title">Jogos de tabuleiro</span></div>
      <div class="carousel-item"><img src="fotos/desenho.png"><span class="card-title">Concurso de desenho?</span></div>
      <div class="carousel-item"><img src="fotos/dragonboll.png"><span class="card-title">Campeonato de Dragon Ball Budokai Tenkaichi 3</span></div>
      <div class="carousel-item"><img src="fotos/freefire.png"><span class="card-title">Campeonato de FreeFire</span></div>
      <div class="carousel-item"><img src="fotos/cosplay.png"><span class="card-title">Concurso de Cosplay</span></div>
      <div class="carousel-item"><img src="fotos/fifa20.png"><span class="card-title">FIFA 20</span></div>
    </div>
  </div>

  <div class="container">
    <h1 class="titulos"> CAMPEONATOS </h1><br><br>

    <div class="row">


      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="fotos/">
            <span class="card-title">Campeonato de Counter Strike 1.6</span>
          </div>
          <div class="card-content">
            <p>Sala: Laboratório 2<br>
              Horário: 08:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/rBDZ2u8bR1HHepKb9">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="fotos/">
            <span class="card-title">Campeonato de Mortal Kombat 9</span>
          </div>
          <div class="card-content">
            <p>Sala: 203 <br>
              Horário: 08:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/4E1Vz8BMqv3kHX9G7">Inscreva-se!</a>
          </div>
        </div>
      </div>


      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="fotos/">
            <span class="card-title">Campeonato de MortalKombat 11</span>
          </div>
          <div class="card-content">
            <p>Sala: 203<br>
              Horário: 08:00 <br> </p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/USXtnKekYfKTRa3E7">Inscreva-se!</a>
          </div>
        </div>
      </div>


      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="fotos/">
            <span class="card-title">Campeonato de Dragon Ball Budokai Tenkaichi 3</span>
          </div>
          <div class="card-content">
            <p>Sala: 304<br>
              Horário: 09:00<br> </p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/USXtnKekYfKTRa3E7">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="fotos/">
            <span class="card-title">Campeonato de Free Fire</span>
          </div>
          <div class="card-content">
            <p>Sala: 307 <br>
              Horário: 09:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/SgQXy9ro2ZMyK34S8">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="fotos/">
            <span class="card-title">Concurso de Cosplay</span>
          </div>
          <div class="card-content">
            <p>Sala: Área coberta/Refeitório<br>
              Horário: 10:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/JH6hzBn5HXSCRxAp8">Inscreva-se!</a>
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
            <li><a class="btn-floating btn-small waves-effect waves-light green" href="https://www.instagram.com/iffar_uruguaiana?igsh=OTYzZ2hrbWU3ZjJj"><i class="material-icons">camera_alt</i> </a> <a href="https://www.instagram.com/iffar_uruguaiana?igsh=OTYzZ2hrbWU3ZjJj" class="white-text text-lighten-3"> Instagram IFFar Uruguaiana </a> </li><br>
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
      var instances = M.Carousel.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
      $('.carousel').carousel();
    });
  </script>

</body>

</html>