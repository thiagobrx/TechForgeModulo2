<?php
            $url = "https://onsetgamess.000webhostapp.com/api/jogo.php";
         $dados = file_get_contents($url);

        $dados = json_decode($dados);
?>

<div class="grid-container">
    <div class="card">
        <?php
        foreach ($dados as $gaames) {
        ?>
                <div class="card d-block d-lg-none d-xl-none">
                     <img src="<?= $gaames->imagem ?>" alt=""<?= $gaames->nome ?> class="100">
                    <p>
                         <strong><?php echo $gaames->nome; ?></strong>
                    </p>
                    <p>
                         <strong><?php echo $gaames->descricao; ?></strong>
                    </p>
                     <p>
                        <strong><?php echo $gaames->instrucoes; ?></strong>
                    </p>

                     <a href="<?php echo $gaames-> link; ?>"></a>

            </div>
    <?php 
            }
?>
    </div>
</div>


<div class="grid-container_desk">
        <?php
        foreach ($dados as $gaames) {
        ?>
                <div class="card d-none d-lg-block">
                     <img src="<?= $gaames->imagem ?>" alt=""<?= $gaames->nome ?> class="100">
                    <p>
                         <strong><?php echo $gaames->nome; ?></strong>
                    </p>
                    <p>
                         <strong><?php echo $gaames->descricao; ?></strong>
                    </p>
                     <p>
                        <strong><?php echo $gaames->instrucoes; ?></strong>
                    </p>
                    <a class="col-6 start" href="<?php echo $gaames-> link; ?>"target="_blank"><br><br>Jogar</a>
                </div>
    <?php 
            }
?>
</div>