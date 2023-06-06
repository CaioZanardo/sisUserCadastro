<?php require "../_helpers/index.php";
echo siteHeader("Ver User");
require("../_config/connection.php");
require("../dao/user.php");

$userDAO = new User();
$product = false;
$error = false;

if (!$_GET || !isset($_GET["id"])) {
    header('Location: index.php?message=Id da user não informado!');
    die();
}

$idUser = $_GET["id"];

try {
    $user = $userDAO->getById($idUser);
} catch (Exception $e) {
    $error = $e->getMessage();
}

 if (!$user || $error) {
    header('Location: index.php?message=Erro ao recuperar dados da user!');
    die();
} 


?>

    <section class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <h1>Visualizar Users</h1>
            </div>
        </div>

        <div class="mb-3">
            <h3>User</h3>
            <p><?= $user["user"] ?></p>
        </div>
 
        <a href="index.php" class="btn btn-primary">Voltar</a>
       
    </section>
<?php require "../_partials/footer.php"; ?>