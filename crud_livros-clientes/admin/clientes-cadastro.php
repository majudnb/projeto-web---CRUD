<?php
    require "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cliente = $_POST["cliente"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $sql = "INSERT INTO clientes (cliente, cidade, estado) VALUES ('$cliente', '$cidade', '$estado')";
        $result = mysqli_query($conexao, $sql);

        if($result){
            echo "<h3>Cliente cadastrado com sucesso!</h3>";
            echo "<a href='../index.php' class='botao-voltar'>Voltar ao menu</a>";
        } else {
            echo "<h3>Erro ao cadastrar cliente!</h3>";
            echo "<a href='../index.php' class='botao-voltar'>Voltar ao menu</a>";
        }
    } else {
        echo "<h3>Envio inválido.</h3>";
        echo "<a href='../index.php' class='botao-voltar'>Voltar ao menu</a>";
    }
?>

<link rel="stylesheet" href="../estilo.css">
