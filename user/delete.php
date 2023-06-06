<?php
require("../_config/connection.php");
require("../dao/user.php");
$userDAO = new User();
$error = false;

if (!$_GET || !$_GET["id"]) {
    header('Location: index.php?message=Id da user não informada!');
    die();
}

$iduser = $_GET["id"];

try {
    $result = $userDAO->delete($iduser);
  
} catch (Exception $e) {
    $error = $e->getMessage();
}

$message = ($result && !$error) ? "User excluido com sucesso." : "Erro ao excluir o user.";
header("Location: index.php?message=$message");
die();
