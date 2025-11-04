<?php
    require "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["id"];
        $cliente = $_POST["cliente"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $sql = "UPDATE clientes SET cliente='$cliente', cidade='$cidade', estado='$estado' WHERE id='$id'";
        $result = mysqli_query($conexao, $sql);

        if($result){
            echo "<h3>Cliente alterado com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao alterar cliente!</h3>";
        }
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<h3>Envio inválido.</h3>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }
?>
<link rel="stylesheet" href="../estilo.css">