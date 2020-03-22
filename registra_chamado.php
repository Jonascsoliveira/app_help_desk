<?php 

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;//php end of line

    var_dump($texto);

    //abrindo arquivo para escrita com cursor no fim da linha deve dar permissã na pasta pra escrita
    $arquivo = fopen('arquivo.hd','a');
    var_dump($arquivo);
    //escrever no arquivo
    fwrite($arquivo, $texto);
    //fechar arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>