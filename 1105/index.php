<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pagina de comentario</title>
</head>
<body>
    <div class="container">
        <main>
            <?php
            if(filter_input(INPUT_GET, 'erro')){
                echo '<div class="erro"> nao foi possivel raquia o site</div>';
            }
            ?>
            <h1>Avalie nosso site!</h1>
            <form action="recebe_comentario.php" method="post">
                <div>
                    <label for="nota">Deixe sua nota!</label>
                    <input type="radio" name="nota" id="nota1" value="1">
                    <label for="nota1">1</label>

                    <input type="radio" name="nota" id="nota2" value="2">
                    <label for="nota2">2</label>

                    <input type="radio" name="nota" id="nota3" value="3">
                    <label for="nota3">3</label>

                    <input type="radio" name="nota" id="nota4" value="4">
                    <label for="nota4">4</label>

                    <input type="radio" name="nota" id="nota5" value="5">
                    <label for="nota5">5</label>

                </div>
                <div>
                    <label for="comentario">Escreva seu </label>
                    <br>
                    <textarea name="comentario" id="comentario" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" value="enviar">
                </div>
            </form>
            <section>
                <?php
                if(file_exists("comentarios.txt")){
                echo '<h2>Comentarios</h2>';
                echo file_get_contents("comentarios.txt");
                 }
                ?>
            </section>
        </main>
    </div>
</body>
</html>