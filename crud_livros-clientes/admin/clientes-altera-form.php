<?php
    require "config.inc.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM clientes WHERE id='$id'";
    $result = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($result);
?>
<h2>Alterar Cliente</h2>
<form action="?pg=clientes-altera" method="post">
    <input type="hidden" name="id" value="<?=$dados['id']?>">
    <label>Nome:</label>
    <input type="text" name="cliente" value="<?=$dados['cliente']?>">
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?=$dados['cidade']?>">
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$dados['estado']?>">
    <input type="submit" value="Salvar">
</form>
<link rel="stylesheet" href="../estilo.css">