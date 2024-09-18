<!--faça uma pagina contendo um formulário contendo um formularaio de uma petshop com cadastro de um cliente e seu animal-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Petshop</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Cadastro de cliente</h1>
        </header>
        <main>
            <form action="retorno.php" method="post">
                <div>
                    <br>
                    <h1>Informações do cliente</h1>
                    <div>
                        <label for="n">Nome:</label>
                        <input type="text" name="nome" id="n" required>
                        <br>
                    </div>

                    <div>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                        <br>
                    </div>

                    <div>
                        <br>
                        <label for="cpf">CPF:</label>
                        <input type="text" id="cpf" name="cpf" pattern="[0-9]{11}" required>
                        <br>
                    </div>

                    <p>Cadastro do pet</p>
                    <div>
                        <br>
                        <label for="npet">Nome do Pet:</label>
                        <input type="text" name="npet" id="npet" required>
                        <br>
                    </div>
                    
                    <div>
                        <p>Sexo do pet:</p>
                        <input type="radio" name="sexo" id="masculino" value="masculino">
                        <label for="masculino">masculino</label>
                        <br>

                        <input type="radio" name="sexo" id="feminino" value="feminino">
                        <label for="feminino">feminino</label>
                        <br>

                    </div>
                    
                    <div>
                        <p>tipo de pet:</p>
                        <input type="radio" name="pet" id="dinossauro" value="dinossauro">
                        <label for="dinossauro">dinossauro</label>
                        <br>
                        <input type="radio" name="pet" id="cavalo" value="cavalo">
                        <label for="cavalo">cavalo</label>
                        <br>
                        <input type="radio" name="pet" id="caranguejo" value="caranguejo">
                        <label for="caranguejo">caranguejo</label>
                        <br>
                        <input type="radio" name="pet" id="peixe" value="peixe">
                        <label for="peixe">peixe</label>
                        <br>
                        <input type="radio" name="pet" id="siri" value="siri">
                        <label for="siri">siri</label>
                        <br>
                        <input type="radio" name="pet" id="cachorro" value="cachorro">
                        <label for="cachorro">cachorro</label>
                        <br>
                        <input type="radio" name="gato" id="gato" value="gato">
                        <label for="gato">gato</label>
                        <br>
                        <input type="radio" name="pet" id="siri" value="siri">
                        <label for="siri">siri</label>
                        <br>
                    </div>
                    
                    <div>
                        <br>
                        <label for="servicos">Serviços:</label>

                        <input type="checkbox" name="tosa" id="tosa">
                        <label for="tosa">Tosa</label>

                        <input type="checkbox" name="castrar" id="castrar">
                        <label for="castrar">Castrar</label>

                        <input type="checkbox" name="banho" id="banho">
                        <label for="banho">Banho</label>

                        <input type="checkbox" name="veterinario" id="veterinario">
                        <label for="veterinario">Veterinario</label>

                        <br>
                    </div>
                    <div>
                        <br>
                        <input type="submit" value="enviar">
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>
</html>