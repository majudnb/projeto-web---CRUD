<?php
    require "config.inc.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM livros WHERE id='$id'";
    $result = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($result);
?>
<h2>Alterar Livro</h2>
<form action="?pg=livros-altera" method="post">
    <input type="hidden" name="id" value="<?=$dados['id']?>">
    <label>Título:</label>
    <input type="text" name="titulo" value="<?=$dados['titulo']?>">
    <label>Autor:</label>
    <input type="text" name="autor" value="<?=$dados['autor']?>">
    <label>Ano de Publicação:</label>
    <input type="number" name="ano_publicacao" value="<?=$dados['ano_publicacao']?>">
    <label>Editora:</label>
    <input type="text" name="editora" value="<?=$dados['editora']?>">
    <input type="submit" value="Salvar">
</form>
<link rel="stylesheet" href="../estilo.css">