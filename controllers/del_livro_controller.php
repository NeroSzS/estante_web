<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/models/livro.php';
$id_livro = $_POST['id_livro'];

$livro = new Livro($id_livro);
$livro->deletarLivro();

header('location: /estante_web/views/livros.php');
exit();
