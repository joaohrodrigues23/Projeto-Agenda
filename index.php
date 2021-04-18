<?php

session_start();
include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Minha Agenda</title>
</head>

<body>
    <header class="cabecalho">
        <h1 class="logo">
            <a href="index.php" title="Minha agenda"> Minha Agenda </a>
        </h1>
        <div class="menu">
            <ul>
                <li><a href="adicionar.php">Adicionar Contato</a></li>
            </ul>
        </div>
    </header>

    <h2 class="titulo">Minha Agenda</h2>

    <div class="table">
        <?php

        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }


        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        $qnt_result_pag = 4;

        $inicio = ($qnt_result_pag * $pagina) - $qnt_result_pag;


        $result_cont = "SELECT * FROM contatos LIMIT $inicio, $qnt_result_pag";
        $resultado = mysqli_query($conex, $result_cont);
        while ($row_contato = mysqli_fetch_assoc($resultado)) {

            echo '<div class="tabela">';
            echo "Nome: " . $row_contato['nome'] . "<br>";
            echo "Estado: " . $row_contato['estado'] . "<br>";
            echo "Cidade: " . $row_contato['cidade'] . "<br>";
            echo "Endereço: " . $row_contato['endereco'] . "<br>";
            echo "DDD: " . $row_contato['ddd'] . "<br>";
            echo "Telefone: " . $row_contato['fone'] . "<br>";
            echo '</div>';
            echo '<div class="editar">';
            echo "<a href='edit.php?id=" . $row_contato['id'] . "'>Editar</a><br>";
            echo '</div>';
            echo '<div class="apagar">';
            echo "<a href='proce_delet.php?id=" . $row_contato['id'] . "'>Apagar<a/><br><hr>";
            echo '</div>';
        }

        ?>
    </div>
    <footer class="paginas">
        <?php
        $result_pg = "SELECT COUNT(id) AS num_result FROM contatos";
        $resultado_pg = mysqli_query($conex, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);

        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pag);

        $max_links = 2;
        echo "<a href='index.php?pagina=1'>Primeira </a>";

        for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {

            if ($pag_ant >= 1) {


                echo "<a href='index.php?pagina=$pag_ant'>$pag_ant </a>";
            }
        }

        echo "$pagina";

        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {

            if ($pag_dep <= $quantidade_pg) {
                echo "<a href='index.php?pagina=$pag_dep'>$pag_dep </a>";
            }
        }

        echo "<a href='index.php?pagina=$quantidade_pg'>Última </a>";

        ?>
    </footer>
</body>

</html>