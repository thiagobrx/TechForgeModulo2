<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>

    <base href="http://localhost/projeto/home">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header navbar navbar-fixed-top navbar-default">
        <a href="home" title="Home" class="header-logo" data-aos="zoom-in">
            <img src="imagens/logotipo.png" alt="Influenza Games">
        </a>

        <a href="javascript:showMenu()" title="Mostrar Menu" class="header-menu" data-aos="zoom-in">
            <img src="imagens/menu.webp" alt="Menu">
        </a>

        <nav class="header-nav" data-aos="zoom-in">
            <ul>
                <li><a href="home" title="Home">Home</a></li>
                <li><a href="quem-somos" title="Quem Somos">Quem Somos</a></li>
                <li><a href="lancamentos" title="Lançamentos">Lançamentos</a></li>
                <li><a href="contato" title="Contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <?php

    if (isset($_GET["param"])) {
        $param = $_GET["param"];
        // separar o parametro por /
        $p = explode("/", $param);

        // print_r($p);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
        $pagina = "jogo/{$jogo}.php";
    } else {
        $pagina = "paginas/{$page}.php";
    }

    //verificar se a página existe
    if (file_exists($pagina)) {
        include $pagina;
    } else {
        include "paginas/erro.php";
    }

    ?>
    </main>
    <footer class="footer">
        <p>Desenvolvido por Thiago Batista, 2024</p>
    </footer>

    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>

    <script>
        AOS.init();
        function showMenu () {
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>