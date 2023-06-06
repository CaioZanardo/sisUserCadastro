<?php require "../_helpers/index.php";
echo siteHeader("Adicionar User");
require("../_config/connection.php");

require("../dao/user.php");
$userDAO = new User();

$result = false;
$error = false;


if ($_POST) {
    try {
        $user = $_POST["p_user"];
        $rs = $userDAO->insert($user);

        if ($rs) {
            header('Location: index.php?message=user inserida com sucesso!');
            die();
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}


?>

<body>



    <section class="container mt-5 mb-5">

        <?php if ($_POST && (!$result || $error)) : ?>
            <p>
                Erro ao salvar a nova user.
                <?= $error ? $error : "Erro desconhecido." ?>
            </p>
        <?php endif; ?>

        <div class="row mb-3">
            <div class="col">
                <h1>Adicionar user</h1>
            </div>
        </div>

        <form action="" method="post">
            <div class="mb-3">
                <label for="p_nome" class="form-label">User</label>
                <input type="text" class="form-control" id="p_user" name="p_user" placeholder="user login">
            </div>

            <a href="index.php" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </section>

    <?php require "../_partials/footer.php"; ?>