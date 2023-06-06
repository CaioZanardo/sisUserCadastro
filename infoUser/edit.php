<?php require "../_helpers/index.php";
echo siteHeader("Editar infoUser");
require("../_config/connection.php");

require("../dao/infoUser.php");
require("../dao/user.php");
$infoUserDAO = new InfoUser();
$userDAO = new user();

$infoUser = false;
$error = false;

if (!$_GET || !isset($_GET["id"])) {
    header('Location: index.php?message=Id da infoUser não informado!');
    die();
}

$idInfoUser = $_GET["id"];

try {
    $infoUser = $infoUserDAO->getById($idInfoUser);
} catch (Exception $e) {
    $error = $e->getMessage();
}

if (!$infoUser || $error) {
    header('Location: index.php?message=Erro ao recuperar dados da infoUser!');
    die();
}

$upadeError = false;
$updateResult = false;
if ($_POST) {
    try {
        $idUser  = $_POST["p_idUser"];
        $pass = $_POST["p_pass"];
        $cpf = $_POST["p_cpf"];
        
        $rs = $infoUserDAO->update($idInfoUser, $idUser, $pass, $cpf);
        
        if ($rs) {
            header('Location: index.php?message=infoUser alterada com sucesso!');
            die();
        }
    } catch (Exception $e) {
        $upadeError = $e->getMessage();
    }
}
try {
    $users = $userDAO->getAll();
} catch (Exception $e) {
    header('Location: index.php?message=Erro ao recuperar users!');
    die();
}

?>


<section class="container mt-5 mb-5">

    <?php if ($_POST && (!$rs || $upadeError)) : ?>
        <p>
            Erro ao alterar a infoUser.
            <?= $error ? $error : "Erro desconhecido." ?>
        </p>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col">
            <h1>Editar infoUser</h1>
        </div>
    </div>

    <form action="" method="post">
    <div class="row">

        <div class="mb-3">
            <label for="p_iduser" class="form-label">Selecione a user da infoUser</label>
            <select class="form-select" id="p_iduser" name="p_iduser" required>
                <option value="">-- Selecione um --</option>

                <?php foreach ($users as $user) : ?>
                    <option value="<?= $user->id ?>" <?= $user->id == $infoUser["iduser"] ? "selected" : "" ?> >
                        <?= $user->user ?>
                </option>

                <?php endforeach; ?>

            </select>
        </div>        
        
        <div class="row mb-3">
            <div class="col-3">
                <label for="p_pass" class="form-label">pass</label>
                <input type="text" class="form-control" id="p_pass" name="p_pass" value="<?= $infoUser["pass"] ?>" />
            </div>
            <div class="col-9">
                <label for="p_cpf" class="form-label">cpf</label>
                <input type="text" class="form-control" id="p_cpf" name="p_cpf" value="<?= $infoUser["cpf"] ?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="index.php" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success">Atualizar</button>
            </div>
        </div>

    </form>
</section>

<?php require "../_partials/footer.php"; ?>