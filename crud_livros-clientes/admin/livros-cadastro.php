<?php
    require "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $ano = $_POST["ano_publicacao"];

        $sql = "INSERT INTO livros (titulo, autor, ano_publicacao)
                VALUES ('$titulo', '$autor', '$ano')";
        $result = mysqli_query($conexao, $sql);

        if($result){
            echo "<h3>Livro cadastrado com sucesso!</h3>";
            echo "<a href='../index.php' class='botao-voltar'>Voltar ao menu</a>";
        } else {
            echo "<h3>Erro ao cadastrar livro!</h3>";
            echo "<a href='../index.php' class='botao-voltar'>Voltar ao menu</a>";
        }
    } else {
        echo "<h3>Envio inválido.</h3>";
        echo "<a href='../index.php' class='botao-voltar'>Voltar ao menu</a>";
    }
?>

<link rel="stylesheet" href="../estilo.css">
