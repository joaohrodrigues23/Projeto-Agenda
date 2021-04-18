<?php
    session_start();

    include_once("conexao.php");
    $id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(!empty ($id)){
    
        $result_contato = "DELETE FROM contatos where id='$id'";
        $resultado_contato = mysqli_query($conex, $result_contato);

        if(mysqli_affected_rows($conex)){

        $_SESSION['msg'] = "<p style='color: green;'>Contato excluido com sucesso</p>";
        header("location: index.php");

        } else{
        $_SESSION['msg'] = "<p style='color: red;'>Não foi possivel excluir</p>";
        header("Location: index.php");

        }
        } else{
        $_SESSION['msg'] = "<p style='color: red;'>Necessário selecionar um contato</p>";
        header("Location: index.php");
        }



?>
   