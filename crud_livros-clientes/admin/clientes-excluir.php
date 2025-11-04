<?php
    require "config.inc.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM clientes WHERE id='$id'";
    $result = mysqli_query($conexao, $sql);

    if($result){
        echo "<h3>Cliente excluído com sucesso!</h3>";
    }else{
        echo "<h3>Erro ao excluir cliente!</h3>";
    }
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
?>
<link rel="stylesheet" href="../estilo.css">