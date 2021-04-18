<?php
    session_start();

    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $ddd = filter_input(INPUT_POST, 'ddd', FILTER_SANITIZE_NUMBER_INT);
    $fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_NUMBER_INT);
   
   $result_contato = "UPDATE contatos SET nome= '$nome', estado= '$estado', cidade= '$cidade', 
   endereco= '$endereco', ddd= '$ddd', fone= '$fone' WHERE id='$id'";

    $resultado = mysqli_query($conex, $result_contato);

    if(mysqli_affected_rows($conex)){
        $_SESSION['msg'] = "<p style='color: green;'>Contato editado com sucesso</p>";
        header("location: index.php");

    } else{
        $_SESSION['msg'] = "<p style='color: red;'>Não foi possivel editar</p>";
        header("Location: edit.php?id=$id");

    }

?>
   