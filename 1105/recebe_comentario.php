<?php
//arquivo recebe comentario.php
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);
    $nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_INT);
    
    //tentou enviar em branco
    if (!$comentario || !$nota){
        header('Location:index.php?erro 1'); # redireciona;
        exit;
    }

    date_default_timezone_get('America/Sao_Paulo');
    $msg = '<div class="comentario">';
    $msg .='<small>'.date("d/m/y H:i").'nota: '.$nota. "</small>";
    $msg .= '<hr>';
    $msg .= $comentario;
    $msg .= '</div>';
    $msg .= "\n\n";

    file_put_contents("comentarios.txt", $msg, FILE_APPEND);
header('Location:index.php'); //redireciona
?>