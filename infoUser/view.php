<?php require "../_helpers/index.php";
echo siteHeader("Ver infoUser");
require("../_config/connection.php");

require("../dao/infoUser.php");

$infoUserDAO = new InfoUser();

$infoUser = false;
$error = false;

if (!$_GET || !$_GET["id"]) {
    header('Location: index.php?message=Id da infoUser não informado!');
    die();
}

$idInfoUser = $_GET["id"];

try {
    $infoUser = $infoUserDAO->getById($idInfoUser);
} catch (Exception $e) {
    echo "Id: ".$idInfoUser."<br>";
    $error = $e->getMessage();
}

if (!$infoUser || $error) {
    header('Location: index.php?message=Erro ao recuperar dados da infoUser!');
    die();
}


?>


    <section class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <h1>Visualizar Cadastro</h1>
            </div>
        </div>

        <div class="mb-3">
            <h3>user</h3>
            <p><?= $infoUser["user"] ?></p>
        </div>
        
        <div class="mb-3">
            <h3>pass</h3>
            <p><?= $infoUser["pass"] ?></p>
        </div>
        
        <div class="mb-3">
            <h3>cpf</h3>
            <p><?= $infoUser["cpf"] ?></p>
        </div>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </section>

<?php require "../_partials/footer.php"; ?>