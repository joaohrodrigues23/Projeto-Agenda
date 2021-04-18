<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Adicionar</title>
</head>

<body>
    <header class="cabecalho">
        <h1 class="logo">
            <a href="index.php" title="Minha agenda"> Adicionar à Agenda </a>
        </h1>
        <div class="menu">
            <ul>
                <li><a href="index.php">Lista de contatos</a></li>
            </ul>
        </div>
    </header>

    <div class="fundo">
        <h2 class="titulo">Adicionar Contato</h2><br>

        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div id="centra">
            <form method="POST" action="processa.php">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Nome completo" autocomplete="off" required="required" size="32">

                <br> <br>
                <label>Estado/cidade: </label>
                <input type="text" name="estado" placeholder="estado" minlength="1" maxlength="2" size="2" autocomplete="off">

                <input type="text" name="cidade" placeholder="digite sua cidade" maxlength="20" autocomplete="off" size="18">
                <br> <br>

                <label>Endereço: </label>
                <input id="endereco" type="text" name="endereco" placeholder="digite seu endereço" autocomplete="off" size="30">

                <br> <br>

                <label>Telefone:</label>
                <input type="text" name="ddd" placeholder="ddd" minlength="1" maxlength="2" size="2" autocomplete="off" required="required">
                <input type="text" name="fone" placeholder="digite seu telefone" maxlength="9" autocomplete="off" required="required" size="23">

                <br> <br>

                <input type="submit" value="cadastrar">
            </form>
        </div>
    </div>
</body>
</html>