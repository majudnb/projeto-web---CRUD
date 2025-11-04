<?php
    include_once "topo.php";
    include_once "menu.php";
    require "admin/config.inc.php";
?>

<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        echo "<h3>Clientes</h3>";
        while($dados = mysqli_fetch_array($resultado)){
            echo "<div class='card'>";
            echo "<p><strong>Nome:</strong> $dados[cliente]</p>";
            echo "<p><strong>Cidade:</strong> $dados[cidade]</p>";
            echo "<p><strong>Estado:</strong> $dados[estado]</p>";
            echo "</div>";
        }
    }else{
        echo "<h3>Nenhum Cliente cadastrado.</h3>";
    }

    include_once "rodape.php";
?>
