<?php  
	require("../_config/connection.php");
    require("../dao/infoUser.php");
    $infoUserDAO = new InfoUser();
    $error = false;

    if(!$_GET || !$_GET["id"]){
        header('Location: index.php?message=Id da infoUser não informado!');
        die();
    }

    $idInfoUser = $_GET["id"];

    try {
        $result = $infoUserDAO->delete($idInfoUser);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

    $message = ($result && !$error) ? "infoUser excluida com sucesso." : "Erro ao excluir a infoUser.";
    header("Location: index.php?message=$message");
    die();

