<?php require "../_helpers/index.php";
echo siteHeader("Editar User");
require("../_config/connection.php");
require("../dao/user.php");
$userDAO = new User();

$user = false;
$error = false;

if (!$_GET || !isset($_GET["id"])) {
    header('Location: index.php?message=Id do user não informado!');
    die();
}

$iduser = $_GET["id"];
$user = $userDAO->getById($iduser);

if (!$user || $error) {
    header('Location: index.php?message=Erro ao recuperar dados do user!');
    die();
}

$updateError = false;
$rs = false;
if ($_POST) {
    try {
        $user = $_POST["p_user"];        
        $rs = $userDAO->update($iduser, $user);
        
        if ($rs) {
            header('Location: index.php?message=user atualizado com sucesso!');
            die();
        }
    } catch (Exception $e) {
        $updateError = $e->getMessage();
    }
}

?>

<body>



    <section class="container mt-5 mb-5">

        <?php if ($_POST && (!$rs || $upadeError)) : ?>
            <p>
                Erro ao alterar o user.
                <?= $error ? $error : "Erro desconhecido." ?>
            </p>
        <?php endif; ?>

        <div class="row mb-3">
            <div class="col">
                <h1>Editar user</h1>
            </div>
        </div>

        <form action="" method="post">

            <div class="mb-3">
                <label for="p_nome" class="form-label">user</label>
                <input type="text" class="form-control" id="p_user" name="p_user" placeholder="user do veículo" value="<?= $user["user"] ?>">
            </div>

            <a href="index.php" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
    </section>

    <?php require "../_partials/footer.php"; ?>