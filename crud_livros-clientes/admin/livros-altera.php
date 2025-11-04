<?php
require "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $ano = $_POST["ano_publicacao"];
        $editora = $_POST["editora"];

        $sql = "UPDATE livros SET titulo='$titulo', autor='$autor',
                ano_publicacao='$ano', editora='$editora' WHERE id='$id'";
        $result = mysqli_query($conexao, $sql);

        if($result){
            echo "<h3>Livro alterado com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao alterar livro!</h3>";
        }
        echo "<a href='?pg=livros-admin'>Voltar</a>";
    } else {
        echo "<h3>Envio inválido.</h3>";
        echo "<a href='?pg=livros-admin'>Voltar</a>";
    }
?>
<link rel="stylesheet" href="../estilo.css">