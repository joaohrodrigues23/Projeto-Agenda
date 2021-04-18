<?php
    session_start();

    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $ddd = filter_input(INPUT_POST, 'ddd', FILTER_SANITIZE_NUMBER_INT);
    $fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_NUMBER_INT);
   
   $result_contato = "INSERT INTO contatos (nome, estado, cidade, endereco, ddd, fone) VALUES ('$nome', '$estado', '$cidade', 
   '$endereco', '$ddd', '$fone')";

    $resultado = mysqli_query($conex, $result_contato);

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "<p style='color: green;'>Contato salvo à sua agenda</p>";
        header("location: index.php");

    } else{
        $_SESSION['msg'] = "<p style='color: red;'>Contato não foi salvo à sua agenda</p>";
        header("Location: index.php");

    }

?>
   
   

    