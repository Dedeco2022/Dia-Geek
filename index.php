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
    }

    @font-face {
      font-family: 'LemonMilk';
      src: url('fonte/LEMONMILK-Bold.otf') format('truetype');
    }

    @font-face {
      font-family: 'Poppins';
      src: url('fonte/Poppins-Light.ttf');
    }

    body {
      background-color: #fafafa;
      color: #333;
      font-family: 'Roboto', sans-serif;
      display: flex;
      flex-direction: column;
      margin: 0;
    }

    nav.navbar {
      background: linear-gradient(135deg, #ff9800, #f57c00);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-wrapper ul li a {
      color: #fff;
      font-weight: 500;
    }

    .brand-logo img {
      height: 60px;
      margin-top: 3px;
      margin-left: 50px; 
    }

    h1.titulos {
      font-family: 'RacingSansOne', sans-serif;
      color: #ff5722;
      text-align: center;
      margin: 20px 0;
    }

    h4 {
      font-family: 'Poppins', sans-serif;
      font-size: 25px;
      font-weight: bold;
    }

    .carousel .carousel-item {
      width: 400px;
      height: 300px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .carousel .atracao {
      font-family: 'LemonMilk', sans-serif;
      color: #ff5722;
      padding: 8px;
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
    }

    .card {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .card-title {
      font-family: 'LemonMilk', sans-serif;
      color: #333;
      font-size: 1.2rem;
    }

    .card-action a {
      color: #ff5722 !important;
      font-weight: bold;
      text-transform: uppercase;
      text-decoration: none;
    }

    .card-image img {
      transition: transform 0.3s ease;
    }

    .card-image img:hover {
      transform: scale(1.05);
    }

    footer.page-footer {
      background-color: #ff9800;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    footer .container h5 img {
      height: 50px;
    }

    .card-content .card-title {
      font-size: 0.75rem;
      font-family: 'LemonMilk', sans-serif;
      color: #333;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><img src="fotos/DIA G K.png" class="img-dia-gk"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#campeonatos">Campeonatos</a></li>
        <li><a href="#atracoes">Atrações</a></li>
        <li><a href="https://forms.gle/EDcMbRRcudYrc7EaA">Convide alguém!</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#campeonatos">Campeonatos</a></li>
    <li><a href="#atracoes">Atrações</a></li>
    <li><a href="https://forms.gle/EDcMbRRcudYrc7EaA">Convide alguém!</a></li>
  </ul>


  <div class="container">
    <h1 class="titulos">INFORMAÇÕES DO EVENTO</h1>
    <div class="informacoes">
      <h4> <a class="btn-floating light green"><i class="material-icons">location_on</i></a> Local: Instituto Federal Farroupilha - Campus Uruguaiana</h4>
      <h4> <a class="btn-floating light green"><i class="material-icons">date_range</i></a> Dia: 25/01/2025</h4>
      <h4> <a class="btn-floating light green"><i class="material-icons">access_time</i></a> Horário: 08:00 - 12:00</h4>
    </div>
    <h1 class="titulos" id="atracoes">ATRAÇÕES</h1><br>
  </div>


  <div class="container">
    <div class="carousel">
      <div class="carousel-item"><img src="fotos/justDance.png">
        <div class="atracao">Just Dance</div>
      </div>
      <div class="carousel-item"><img src="fotos/cs.png">
        <div class="atracao">Campeonato de Counter Strike 1.6</div>
      </div>
      <div class="carousel-item"><img src="fotos/exposicao.png">
        <div class="atracao">Exposição de software opensource</div>
      </div>
      <div class="carousel-item"><img src="fotos/MK9.png">
        <div class="atracao">Campeonato de MortalKombat 9</div>
      </div>
      <div class="carousel-item"><img src="fotos/multi.png">
        <div class="atracao">MultiVersos</div>
      </div>
      <div class="carousel-item"><img src="fotos/RPG.png">
        <div class="atracao">RPG</div>
      </div>
      <div class="carousel-item"><img src="fotos/anime.png">
        <div class="atracao">Animes</div>
      </div>
      <div class="carousel-item"><img src="fotos/palestra.png">
        <div class="atracao">Palestra</div>
      </div>
      <div class="carousel-item"><img src="fotos/quiz.png">
        <div class="atracao">Quiz</div>
      </div>
      <div class="carousel-item"><img src="fotos/tabuleiro.png">
        <div class="atracao">Jogos de tabuleiro</div>
      </div>
      <div class="carousel-item"><img src="fotos/desenho.png">
        <div class="atracao">Exposição de desenhos</div>
      </div>
      <div class="carousel-item"><img src="fotos/dragonboll.png">
        <div class="atracao">Campeonato de Dragon Ball Budokai Tenkaichi 3</div>
      </div>
      <div class="carousel-item"><img src="fotos/freefire.png">
        <div class="atracao">Campeonato de FreeFire</div>
      </div>
      <div class="carousel-item"><img src="fotos/cosplay.png">
        <div class="atracao">Concurso de Cosplay</div>
      </div>
      <div class="carousel-item"><img src="fotos/pes2017.png">
        <div class="atracao">PES 2017</div>
      </div>

    </div>
  </div>

  <div class="container">
    <h1 class="titulos" id="campeonatos"> CAMPEONATOS </h1><br>

    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/pes2017.png">
          </div>
          <div class="card-content">
            <span class="card-title">PES 2017</span>
            <p>Sala: Laboratório 1<br>
              Horário: 08:00</p>
          </div>
          <div class="card-action">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfh2ofrkLDrDVcUR0VZW7h3rH32DSMhQoRyp19_OXA5FW6x4Q/viewform?vc=0&c=0&w=1&flr=0">Inscreva-se!</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/cs.png">
          </div>
          <div class="card-content">
            <span class="card-title">Counter Strike 1.6</span>
            <p>Sala: Laboratório 2<br>
              Horário: 08:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/wgJtKPdxpja4zNei7">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/MK9.png">
          </div>
          <div class="card-content">
            <span class="card-title">Mortal Kombat 9</span>
            <p>Sala: 202 <br>
              Horário: 08:00</p>
          </div>
          <div class="card-action">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSecFoM0TnxqZBhMtH-Czpn1R42_p4OA4pnVa-goQDqL7nHWxg/viewform?usp=sf_link">Inscreva-se!</a>
          </div>
        </div>
      </div>


      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/multi.png">
          </div>
          <div class="card-content">
            <span class="card-title">MultiVersos</span>
            <p>Sala: 203<br>
              Horário: 08:00 <br> </p>
          </div>
          <div class="card-action">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc39Nkg1tRvPgU9Ewqav-h6BHK8uzjSbM81fDns0r60pXsRDA/viewform?usp=sf_link">Inscreva-se!</a>
          </div>
        </div>
      </div>


      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/dragonboll.png">
          </div>
          <div class="card-content">
            <span class="card-title">Dragon Ball Budokai Tenkaichi 3</span>
            <p>Sala: 304<br>
              Horário: 09:00<br> </p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/USXtnKekYfKTRa3E7">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/freefire.png">
          </div>
          <div class="card-content">
            <span class="card-title">Free Fire</span>
            <p>Sala: 307 <br>
              Horário: 09:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/SgQXy9ro2ZMyK34S8">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/cosplay.png">
          </div>
          <div class="card-content">
            <span class="card-title">Concurso de Cosplay</span>
            <p>Sala: Área coberta/Refeitório<br>
              Horário: 10:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/JH6hzBn5HXSCRxAp8">Inscreva-se!</a>
          </div>
        </div>
      </div>
    </div>
  </div><br>


  <!-- Rodapé -->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><img src="fotos/DIA G K.png"></h5>
          <p class="grey-text text-lighten-4">Prática Pedagógica Integrada (PPI) da turma INFO31 - 2024</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text"><img src="fotos/logoIFF.png" class="img-logo-iff"></h5>
        </div>
      </div>
    </div>
  </footer>

  <!-- Content and Footer will remain similar -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.carousel');
      var instances = M.Carousel.init(elems, options);
    });
    $(document).ready(function() {
      $('.carousel').carousel();
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems, options);
    });
    $(document).ready(function() {
      $('.materialboxed').materialbox();
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>
</body>

</html>