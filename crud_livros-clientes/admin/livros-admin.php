<?php
    require "config.inc.php";

    echo "<p><a class='action add' href='?pg=livros-cadastro-form'>Cadastrar Livro</a></p>";
    echo "<h2>Lista de Livros</h2>";

    $sql = "SELECT * FROM livros";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "Id: ".$dados['id']." | ";
            echo "Título: ".$dados['titulo']." | ";
            echo "Autor: ".$dados['autor']." | ";
            echo "Ano: ".$dados['ano_publicacao']." | ";
            echo " <a class='action edit' href='?pg=livros-altera-form&id=$dados[id]'>Alterar</a>";
            echo " <a class='action delete' href='?pg=livros-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum livro cadastrado.</h3>";
    }
?>
<link rel="stylesheet" href="../estilo.css">
