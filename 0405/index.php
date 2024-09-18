<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Server do SID</title>
</head>
<body>
    <div class="container">
        <h1>Formulario</h1>
        <form action="receba.php" method="post">

            <div>
                <label for="n">Nome:</label>
                <input type="text" name="nome" id="n">
            </div>

            <div>
                <label for="s">Senha:</label>
                <input type="password" name="senha" id="s">
            </div>

            <div>
                <p>Quais linguagens você usa?</p>

                <input type="checkbox" name="html" id="html">
                <label for="html">HTML</label>
                <br>

                <input type="checkbox" name="css" id="css">
                <label for="css">CSS</label>
                <br>

                <input type="checkbox" name="javascript" id="javascript">
                <label for="javascript">Javascript</label>
                <br>

                <input type="checkbox" name="scratch" id="scratch">
                <label for="scratch">Scratch</label>
                <br>

                <input type="checkbox" name="php" id="php">
                <label for="php">PHP</label>
                <br>

            </div>
            
            <div>
                <p>escolha um curso</p>

                <input type="radio" name="curso" id="info" value="info">
                <label for="info">Informatica</label>
                <br>

                <input type="radio" name="curso" id="adm" value="adm">
                <label for="adm">Adminstração</label>
                <br>


            </div>

            <div>
                <br>
                <label for="turma">Turma:</label>
                <select name="turma" id="turma">
                    <option value="2019">Turma 2019</option>
                    <option value="2019">Turma 2020</option>
                    <option value="2019">Turma 2021</option>
                    <option value="2019">Turma 2022</option>
                    <option value="2019">Turma 2023</option>
                    <option value="2019">Turma 2024</option>
                </select>   
                <br>  
            </div>

            <div>
                <br>
                <label for="comentario">faça um comentario:</label>
                <br>
                <textarea name="comentario" id="comentario" rows="10"></textarea>
                <br>
            </div>

            <div>
                <br>
                <input type="submit" value="enviar">
            </div>   

        </form>
    </div>
</body>
</html>