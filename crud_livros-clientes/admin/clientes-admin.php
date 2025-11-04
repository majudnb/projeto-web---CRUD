<?php
    require "config.inc.php";

    echo "<p><a class='action add' href='?pg=clientes-cadastro-form'>Cadastrar Cliente</a></p>";
    echo "<h2>Lista de Clientes</h2>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "Id: ".$dados['id']." | ";
            echo "Nome: ".$dados['cliente']." | ";
            echo "Cidade: ".$dados['cidade']." | ";
            echo "Estado: ".$dados['estado']." | ";
            echo " <a class='action edit' href='?pg=clientes-altera-form&id=$dados[id]'>Alterar</a>";
            echo " <a class='action delete' href='?pg=clientes-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum cliente cadastrado.</h3>";
    }
?>
<link rel="stylesheet" href="../estilo.css">