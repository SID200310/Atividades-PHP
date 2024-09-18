<?php isset($check)?true:die('Acesso negado');?>
<h1>Imóveis a venda</h1>

<?php
$conexao = new PDO('mysql:host=localhost; dbname=imobiliaria', 'root', '');
$sql = "SELECT i.nome, i.descricao, i.valor, m.nome AS cidade
        FROM imovel i, municipio m
        WHERE i.municipio_id=m.id AND finalidade='venda'";
$imoveis = $conexao->query($sql);

foreach($imoveis as $i) {
    echo '<div class="imovel">';
    echo '<h3>'.$i['nome'].'</h3>';
    echo '<h3>'.$i['descricao'].'</h3>';
    echo '<h3> R$ '.$i['valor'].'</h3>';
    echo '<h3>'.$i['cidade'].'</h3>';
    echo '</div>';
};

?>