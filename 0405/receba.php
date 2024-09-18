<?php
//arquivo receba.php

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$comentario = $_POST["comentario"];
$curso = $_POST["curso"];

echo "<p>Nome: $nome</p>";
echo "<p>Senha: ".md5($senha)."</p>";
echo  $curso;
echo "<p>comentario:" .$comentario. "</p>";
?>