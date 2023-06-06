<?php
require("../_config/connection.php");
require("../dao/user.php");

$userDAO = new User();
$error = false;

$json = file_get_contents('php://input'); // Obtem a linha JSON (Raw) do Request com método POST
$data = json_decode($json); //Converte para um objeto PHP

if ($data) { //Se o objeto JSON estiver populado corretamente
    try {
        $user = $data->user; //obtem a user do atributo do JSON
        if ($user){
            $rs = $userDAO->insert($user); //Envia a user para o DAO inserir no banco
            if ($rs) { //Se retornou com sucesso, retorna o JSON de sucesso
                $result = array(
                    "status" => 201,
                    "message" => "user inserida com sucesso."
                );            
            }
        }
    } catch (Exception $e) {  //caso tenha dado algum erro      
        $error = $e->getMessage();
        $result = array (
            "status" => 422,
            "message" => "'.$error.'"
        ); 
    }
} else { //Se o objeto JSON veio incorreto
    $result = array (
        "status" => 400,
        "message" => "Não foi possível interpretar a requisição ou chegou em branco."
    );
}

header('Content-Type: application/json; charset=utf-8'); //seta o cabeçalho de retorno
echo json_encode($result); //retorna o result array em formato JSON
die();

