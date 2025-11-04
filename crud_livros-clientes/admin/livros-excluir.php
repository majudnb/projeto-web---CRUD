<?php
    require "config.inc.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM livros WHERE id='$id'";
    $result = mysqli_query($conexao, $sql);

    if($result){
        echo "<h3>Livro excluído com sucesso!</h3>";
    }else{
        echo "<h3>Erro ao excluir livro!</h3>";
    }
    echo "<a href='?pg=livros-admin'>Voltar</a>";
?>
<link rel="stylesheet" href="../estilo.css">