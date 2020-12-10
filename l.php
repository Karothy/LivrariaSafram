<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Livraria Safram - Pagina Inicial</title>
    <style>
      .carousel-item{
        width:100%;
        height:650px;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">
          <?php
          include('verifica_login.php');
          ?>
          
          <h2>Olá, <?php echo $_SESSION['nome'];?>!</h2>
          <h2><a href="logout.php">Sair</a></h2></a>
      </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <a class="navbar-brand text-white"><h3>Livraria Safram</h3></a>
      <a class="navbar-brand text-white" href="#">
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="nav nav-pills flex-column flex-sm-row navbar-light bg-success">
      <a class="flex-sm-fill text-sm-center nav-link text-white" href="acao.html">Ação</a>
      <a class="flex-sm-fill text-sm-center nav-link text-white" href="aventura.html">Aventura</a>
      <a class="flex-sm-fill text-sm-center nav-link text-white" href="suspense.html">Suspense</a>
      <a class="flex-sm-fill text-sm-center nav-link text-white" href="ficcao.html">Ficção</a>
      <a class="flex-sm-fill text-sm-center nav-link text-white" href="fantasia.html">Fantasia</a>
      <a class="flex-sm-fill text-sm-center nav-link text-white" href="terror.html">Terror</a>
    </nav><br>
    <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-dark text-center my-3"><font style="font-size:350%;font-style:italic;">Recentemente adicionados</font></div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="cabana.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">A Cabana</h5>
              <p class="card-text">Um homem vive atormentado após perder a sua filha mais nova, cujo corpo nunca foi encontrado, mas sinais de que ela teria sido violentada e assassinada são encontrados em uma cabana nas montanhas.</p>
              <a href="tela_de_livro.html" class="btn btn-primary">R$60<br>Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="it-a-coisa.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">It - A Coisa</h5>
              <p class="card-text">O mais profundo e tenebroso medo. Naquele verão, eles enfrentaram pela primeira vez a Coisa, um ser sobrenatural e maligno que deixou terríveis marcas de sangue em Derry. Quase trinta anos depois, os amigos voltam a se encontrar.</p>
              <a href="tela_de_livro_it.html" class="btn btn-primary">R$70<br>Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="a-culpa-e-das-estrelas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">A Culpa é Das Estrelas</h5>
              <p class="card-text">Hazel é uma paciente terminal. Ainda que, por um milagre da medicina, seu tumor tenha encolhido bastante o que lhe dá a promessa de viver mais alguns anos , o último capítulo de sua história foi escrito no momento do diagnóstico. </p>
              <a href="tela_de_livro-estrelas.html" class="btn btn-primary">R$65<br>Comprar</a><br>
            </div>
          </div>
        </div>
        </div>
      </div><br>
      <font style="font-size:350%;font-style:italic;"><center>Fique por dentro!</center></font>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="estante.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Folha e Público inauguram série de eventos sobre livros para unir lusófonos</h5>
              <p>Encontro de Leituras, que começa com o angolano Ondjaki, discutirá mensalmente romances, memórias e ensaios.</p>
              <a href="https://www1.folha.uol.com.br/ilustrada/2020/12/folha-e-publico-inauguram-serie-de-eventos-sobre-livros-para-unir-lusofonos.shtml" class="btn btn-primary">Me mande pra lá!</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="bienal.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bienal do Livro de SP começa segunda em edição totalmente virtual</h5>
              <p>Tema do evento este ano é Conectando Pessoas e Livros.</p>
              <a href="https://agenciabrasil.ebc.com.br/geral/noticia/2020-12/bienal-do-livro-de-sp-comeca-segunda-em-edicao-totalmente-virtual" class="btn btn-primary">Me mande pra lá!</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="5-livros-de-romance.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Livros de romance: 5 obras para ler e se apaixonar</h5>
              <p>5 romances que vão garantir boas horas de leitura.</p>
              <a href="https://caras.uol.com.br/caras-recomenda/livros-de-romance-5-obras-para-ler-e-se-apaixonar.phtml" class="btn btn-primary">Me mande pra lá!</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-dark text-center my-3"><font style="font-size:350%;font-style:italic;">Descontos</font></div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="banner-harry-potter.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Harry Potter e a Pedra Filosofal</h5>
                <p class="card-text">Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado para a casa dos tios que nada tinham a ver com o sobrenatural. Até os 10 anos, Harry foi maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo que o conduz a um mundo mágico.</p>
                <a href="tela-de-livro-harry.html" class="btn btn-primary">DESCONTO:R$45<br>Comprar</a>
              </div>
            </div>
          </div><br><br>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="call-of-cthulu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">O Chamado de Cthulhu</h5>
                <p class="card-text">O Chamado de Cthulhu é um conto de horror do escritor norte-americano H. P. Lovecraft, contando a investigação sobre um ser extraterrestre e dos "antigos", que na mitologia lovecraftiana seriam criaturas cósmicas, vindas à Terra antes desta abrigar a vida.</p>
                <a href="teal-de-livro-cthulhu.html" class="btn btn-primary">DESCONTO:R$40<br>Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="a-menina-que-roubava-livros.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A Menina Que Roubava Livros</h5>
                <p class="card-text">Durante a Segunda Guerra Mundial, uma jovem garota chamada Liesel Meminger sobrevive fora de Munique lendo os livros que ela rouba. Ajudada por seu pai adotivo, ela aprende a ler e partilhar livros com seus amigos, incluindo um judeu que vive na clandestinidade em sua casa.</p>
                <a href="a-menina-que-roubava-livros.html" class="btn btn-primary">DESCONTO:R$30<br>Comprar</a>
              </div>
            </div>
          </div>
          </div>
  </main><br>
  <footer>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <a class="navbar-brand text-white" href="sobrenos.html">Sobre nós</a>
    </nav>
  </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
