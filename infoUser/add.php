<?php require "../_helpers/index.php";
echo siteHeader("Adicionar infoUser");
require("../_config/connection.php");
require("../dao/infoUser.php");
require("../dao/user.php");

$infoUserDAO = new InfoUser();
$userDAO = new user();

$result = false;
$error = false;
if ($_POST) {
    try {
        $idUser  = $_POST["p_idUser"];
        $pass = $_POST["p_pass"];
        $cpf = $_POST["p_cpf"];
        
        $result = $infoUserDAO->insert($idUser, $pass, $cpf);
         if ($result) {
            header('Location: index.php?message=InfoUser inserido com sucesso!');
            die();
        } 
    } catch (Exception $e) {
        $error = $e->getMessage();
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

    <?php if ($_POST && (!$result || $error)) : ?>
        <p>
            Erro ao salvar a infoUser.
            <?= $error ? $error : "Erro desconhecido." ?>
        </p>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col">
            <h1>Adicionar infoUser</h1>
        </div>
    </div>

    <form action="" method="post">
        <div class="row">

            <div class="mb-3">
                <label for="p_iduser" class="form-label">Selecione a user da infoUser</label>
                <select class="form-select" id="p_idUser" name="p_idUser" required>
                    <option value="">-- Selecione um --</option>

                    <?php foreach ($users as $user) : ?>
                        <option value="<?= $user->id ?>">
                            <?= $user->user ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                <label for="p_pass" class="form-label">Pass</label>
                <input type="text" class="form-control" id="p_pass" name="p_pass" />
            </div>
            <div class="col-9">
                <label for="p_cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="p_cpf" name="p_cpf" />
            </div>
        </div>
        
        
        <div class="row">
            <div class="col">
                <a href="index.php" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>

    </form>
</section>

<?php require "../_partials/footer.php"; ?>