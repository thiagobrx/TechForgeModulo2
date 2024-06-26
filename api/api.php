<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");
 
$jogo[1] = array (
    "id" => 4,
    "nome" => "Jack Runner",
    "imagem" => "http://localhost/BandeiraGames/imagens/start.png",
);

$jogo[2] = array (
    "id" => 6,
    "nome" => "Flying Chicken",
    "imagem" => "http://localhost/BandeiraGames/imagens/flyingchicken.jpg",
    "descricao" => "ww"
);

$jogo [3] = array (
    "id" => 1,
    "nome" => "Arte da Ocultação",
    "imagem" => "http://localhost/BandeiraGames/imagens/arte-da-ocultação.jpeg",
);

$jogo [4] = array (
    "id" => 2,
    "nome" => "Space Thunder",
    "imagem" => "http://localhost/BandeiraGames/imagens/Space-Thunder.jpeg",
);

$jogo[5] = array (
    "id" => 5,
    "nome" => "Survival Of The Undead",
    "imagem" => "http://localhost/BandeiraGames/imagens/survivalimg.jpg",
);

$jogo[6] = array (
    "id" => 3,
    "nome" => "Speed Bird",
    "imagem" => "http://localhost/BandeiraGames/imagens/speedbird2.0.jpg",
);

echo json_encode($jogo);
