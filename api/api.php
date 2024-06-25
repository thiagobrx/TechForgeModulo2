<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");
 
$jogo [1] = array (
    "nome" => "Jack Runner",
    "descricao" => "Jack Runner é um jogo de corrida infinita, onde a cada obstaculo que o personagem principal desviar, ganha uma pontução no seu score. O objetivo do jogo é conseguir ultrapassar o seu proprio limite e conseguir chegar numa pontução mais alta que você conseguir!",
    "imagem" => "jogo/Projeto Kelwin/Imagens pra colocar no site/start.png",
    "link" => "http://localhost/projeto/BatistaGames/jogo/jack-runner"
);
echo json_encode($jogo);