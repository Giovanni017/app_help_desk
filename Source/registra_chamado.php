<?php
    session_start();

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id']. '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('../../../app_help_desk/arquivo.hd', 'a');

    //escrevendo arquivo
    fwrite($arquivo, $texto);

    //fechando arquivo
    fclose($arquivo);

    header('location: abrir_chamado.php');
