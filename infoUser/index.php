<?php require "../_helpers/index.php";
echo siteHeader("Gerenciar InfoUsers");
require("../_config/connection.php");
require("../dao/infoUser.php");


$message = false;
if ($_GET && $_GET["message"]) {
	$message = $_GET["message"];
}
$infoUsers = new InfoUser();
?>
<section class="container mt-5 mb-5">

	<?php if ($message) : ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<?= $message ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>

	<div class="row mb-3">
		<div class="col">
			<h1>Informação do User</h1>
		</div>
		<div class="col d-flex justify-content-end align-items-center">
			<a class="btn btn-primary" href="add.php">Adicionar</a>
		</div>
	</div>

	<table class="table table-striped table-bordered text-center">
		<thead class="table-dark">
			<tr>
				<th>ID</th>
				<th>user</th>
				<th>pass</th>
				<th>cpf</th>				
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($infoUsers->getAll() AS $infoUser) : ?>
				<tr>
					<td>
						<?= "#".$infoUser->id?>
					</td>

					<td>
						<?= $infoUser->user ?>
					</td>
					
					<td>
						<?= $infoUser->pass ?>
					</td>
					
					<td>
						<?= $infoUser->cpf ?>
					</td>					
					<td>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-primary" onclick="confirmDelete(<?= $infoUser->id ?>)">
								Excluir
							</button>
							<a href="edit.php?id=<?= $infoUser->id ?>" class="btn btn-outline-primary">
								Editar
							</a>
							<a href="view.php?id=<?= $infoUser->id ?>" class="btn btn-outline-primary">
								Ver
							</a>
						</div>
					</td>
				</tr>

			<?php endforeach; ?>
		</tbody>
		<tfooter class="table-dark">
			<tr>
				<th>ID</th>
				<th>user</th>
				<th>pass</th>
				<th>cpf</th>				
				<th>Ações</th>
			</tr>
		</tfooter>
	</table>
</section>

<script>
	const confirmDelete = (idinfoUser) => {
		const response = confirm("Deseja realmente excluir a infoUser?")
		if (response) {
			window.location.href = "delete.php?id=" + idinfoUser
		}
	}
</script>

<?php require("../_partials/footer.php"); ?>