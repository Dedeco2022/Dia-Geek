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

    @font-face {
      font-family: 'LemonMilk';
      src: url('fonte/LEMONMILK-Bold.otf') format('truetype');
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

    .titulos {
      font-family: RacingSansOne, sans-serif;
      color: orange;
    }

    .img-dia-gk {
      width: 205px;
      height: auto;
    }

    .img-logo-iff {
      width: 250px;
      height: auto;
    }

    /* Aumenta os items do carrossel */
    .carousel .carousel-item {
      width: 500px;
      height: 400px;
    }

    .atracao {
      text-align: center;
      font-family: LemonMilk, sans-serif;
    }

    .informacoes {
      font-family: LemonMilk, sans-serif;
    }

    .informacoes h4 {
      font-size: 1.5rem;
      /* Tamanho reduzido */
    }

    .card-title {
      font-family: LemonMilk, sans-serif !important;
      color: black !important;
      font-size: 11px !important;
      text-shadow: none !important;
      text-align: center !important;
    }

    .card-action a {
      color: orange !important;
      font-weight: bold !important;
    }

    .brand-logo img {
      margin-left: 100px !important;
      margin-top: -2px !important;
    }

    #nav-mobile li {
      margin: 0 180px !important;
      /* Adiciona espaçamento horizontal entre os itens da lista */
      margin-left: -180px !important;
    }

    .tabela-programacao {
      font-size: 12px;
      /* Tamanho menor do texto */
      width: 90%;
      /* Reduzindo a largura total */
      margin: auto;
      /* Centraliza a tabela */
    }

    .tabela-programacao th,
    .tabela-programacao td {
      border: 1px solid black;
      text-align: center;
      padding: 8px;
      /* Espaçamento menor nas células */
    }

    .tabela-programacao th {
      background-color: #f5f5f5;
    }

    tbody tr:hover {
      background-color: #e0f7fa;
      /* Adiciona destaque na linha ao passar o mouse */
    }

    html {
      scroll-behavior: smooth;
    }
  </style>

</head>

<body>

  <!-- Barra de Navegação -->
  <nav class="navbar orange">
    <div class="nav-wrapper"> <a href="index.php" class="brand-logo"> <img src="fotos/DIA G K.png" class="img-dia-gk"> </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#campeonatos">Campeonatos</a></li>
        <li><a href="#atracoes">Atrações</a></li>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc88EErvslpy7lyYumEOyadaQWwc7AgJb2vVJYEp_eIVQsEqA/viewform?vc=0&c=0&w=1&flr=0">Convide alguém!</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#campeonatos">Campeonatos</a></li>
    <li><a href="#atracoes">Atrações</a></li>
    <li><a href="#">Convide alguém!</a></li>
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
      <div class="carousel-item"><img src="fotos/twister.png">
        <div class="atracao">Twister</div>
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
        <div class="atracao">Concurso de desenho?</div>
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
      <div class="carousel-item"><img src="fotos/fifa20.png">
        <div class="atracao">FIFA 20</div>
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
            <span class="card-title">Campeonato de Counter Strike 1.6</span>
            <p>Sala: Laboratório 2<br>
              Horário: 08:00</p>
          </div>
          <div class="card-action">
            <a href="https://forms.gle/rBDZ2u8bR1HHepKb9">Inscreva-se!</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img class="materialboxed" src="fotos/MK9.png">
          </div>
          <div class="card-content">
            <span class="card-title">Campeonato de Mortal Kombat 9</span>
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
            <span class="card-title">Campeonato de Dragon Ball Budokai Tenkaichi 3</span>
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
            <span class="card-title">Campeonato de Free Fire</span>
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

    <!-- <h1 class="titulos" id="programacao">PROGRAMAÇÃO</h1><br> 

     <table class="tabela-programacao">
      <thead>
        <tr>
          <th>Horário</th>
          <th>Lab1</th>
          <th>Lab2</th>
          <th>Lab3</th>
          <th>109</th>
          <th>202</th>
          <th>203</th>
          <th>208</th>
          <th>302</th>
          <th>303</th>
          <th>304</th>
          <th>306</th>
          <th>307</th>
          <th>Biblioteca</th>
          <th>Área Coberta/Refeitório</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>08:00</td>
          <td rowspan="5">FIFA 20</td>
          <td rowspan="5">CS 1.6</td>
          <td>Exposição de software opensource</td>
          <td>justDance <br> Twister </td>
          <td rowspan="5">MortalKombat 9</td>
          <td rowspan="5">MortalKombat 11</td>
          <td>Animes</td>
          <td>Palestra</td>
          <td rowspan="5">Jogos de tabuleiro</td>
          <td>Concurso de desenho</td>
          <td>Animes</td>
          <td></td>
          <td>RPGs</td>
          <td></td>
        </tr>

        <tr>
          <td>09:00</td>
          <td></td>
          <td></td>
          <td></td>
          <td rowspan="3">Quiz</td>
          <td rowspan="3">Dragon Ball Budokai Tenkaichi 3</td>
          <td></td>
          <td rowspan="3">Free Fire</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>10:00</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Concurso de Cosplay</td>
        </tr>
        <tr>
          <td>11:00</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>12:00</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody> 
    </table> -->



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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems, options);
    });

    // Or with jQuery

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