<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Imobiliária Peras</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Imobiliária Peras</h1>
            <p><em>Top 10 melhores imóveis para comprar no Brasil</em></p>
        </header>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="?page=comprar">Comprar</a>
            <a href="?page=alugar">Alugar</a>
            <a href="?page=contato">Contato</a>
        </nav>
        <main>
            <section>
                <?php
                    $check = TRUE;
                    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
                    if ($page && file_exists("./pages/$page.php")){
                        require "./pages/$page.php";
                    } else {
                        require "./pages/inicio.php";
                    };
                ?>
            </section>
        </main>
        <footer>
            <p>Técnico em Informática 2021</p>
        </footer>
    </div>
</body>
</html>