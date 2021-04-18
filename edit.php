<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_contato = "SELECT * FROM contatos WHERE id='$id'";
$resultado_contato = mysqli_query($conex, $result_contato);
$row_contato = mysqli_fetch_assoc($resultado_contato);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Editar</title>
</head>

<body>
    <header class="cabecalho">
        <h1 class="logo">
            <a href="index.php" title="Minha agenda"> Editar Contatos </a>
        </h1>
        <div class="menu">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
            </ul>
        </div>
    </header>



    <h2>Editar Contatos</h2><br>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="proce_edit.php">
        <input type="hidden" name="id" value="<?php echo $row_contato['id']; ?>">

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $row_contato['nome']; ?>">

        <br> <br>
        <label>Endereço:</label>
        <input type="text" name="estado" placeholder="estado" minlength="1" maxlength="2" size="2" value="<?php echo $row_contato['estado']; ?>">

        <input type="text" name="cidade" placeholder="digite sua cidade" value="<?php echo $row_contato['cidade']; ?>">

        <input type="text" name="endereco" placeholder="digite seu endereço" value="<?php echo $row_contato['endereco']; ?>">
        <br> <br>

        <label>Telefone:</label>
        <input type="text" name="ddd" placeholder="ddd" minlength="1" maxlength="2" size="2" value="<?php echo $row_contato['ddd']; ?>">

        <input type="text" name="fone" placeholder="digite seu telefone" maxlength="9" value="<?php echo $row_contato['fone']; ?>">

        <br> <br>

        <input type="submit" value="editar">
    </form>
</body>

</html>