<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/models/livro.php';

$id_livro = $_POST['id_livro'];
$titulo = $_POST['edit-title-livro'];
$autor = $_POST['edit-autor-livro'];
$id_categoria = $_POST['edit-categoria-livro'];
$sinopse = $_POST['edit-sinopse-livro'];
if (!empty($_FILES['edit-capa-livro']['tmp_name'])) {
    $capa = file_get_contents($_FILES['edit-capa-livro']['tmp_name']);
};


$livro = new Livro($id_livro);
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->id_categoria = $id_categoria;
$livro->sinopse = $sinopse;
if (isset($capa)) {
    $livro->capa = $capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/estante_web/imgs/perfil_icon.svg');
}

$livro->atualizarLivro();
header('Location: /estante_web/views/livros.php');
exit();
