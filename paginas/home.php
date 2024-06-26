<?php
$url = "https://bandeiragames2020.000webhostapp.com/api/api.php";
$dados = file_get_contents($url);
$dados = json_decode($dados);


?>

<div class="container-sm">
  <h1>Destaques</h1>
  <div id="carouselExampleIndicators" class="carousel slide" data-aos="zoom-in-up" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <img src="imagens/Space-Thunder.jpeg" class="d-block w-100" alt="Assassins Creed Shadows">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="imagens/flyingchicken.jpg" class="d-block w-100" alt="Flying-Chiken">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagens/survivalimg.jpg" class="d-block w-100" alt="Survival Of The Undead">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1>Novos Lançamentos</h1>
  <div class="container row" data-aos="fade-up">
    <?php
    foreach ($dados as $arquivos) {
    ?>

      <div class="col-sm-4 g-4" data-aos="fade-up">
        <div class="">
          <div class="card h-100 border-primary text-bg-dark">
            <img src="<?= $arquivos->imagem ?>" class="card-img-top" alt="Jack Runner">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $arquivos->nome ?></h5>
              <p class="card-text">Corrida, Record, Pontuação, 2D</p>
              <a href="jogo/jogo<?= $arquivos->id ?>" class="btn btn-primary text-center">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>