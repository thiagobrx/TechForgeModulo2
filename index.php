<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Influenza Games</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <a href="home" title="Home" class="header-logo">
            <img src="imagens/logo.png" alt="Stem">
        </a>

        <a href="javascript:showMenu()" title="Mostrar Menu" class="header-menu">
            <img src="imagens/menu.webp" alt="Menu">
        </a>

        <nav class="header-nav">
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
        <p>Desenvolvido por Thiago</p>
    </footer>

    <script>
        function showMenu () {
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>
</body>

</html>