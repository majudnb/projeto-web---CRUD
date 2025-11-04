<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Administração - Projeto1</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header class="admin-topo"><h1>Painel Administrativo</h1></header>

    <nav class="admin-menu">
        <a href="index.php">Início</a>
        <a href="?pg=clientes-admin">Clientes</a>
        <a href="?pg=livros-admin">Livros</a>
    </nav>

    <div class="conteudo">
    <?php
    
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal";
        echo "<h2>Bem-vindo ao painel administrativo</h2>";
    }else{
        $pg = $_GET['pg'];
        include "$pg.php";
    }
    ?>
    </div>

</body>
</html>
