
<main class="container">

	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px">Editar Estado</h2>
			</div>

			<div class="card-body">
				<form action="?controller=estado&method=update" method="post">

					<input type="hidden" name="ID_ESTADO" value="<?php echo $data[0]->ID_ESTADO; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="estado" class="form-control" placeholder="Ingrese nuevo nombre del estado" value="<?php echo $data[0]->ESTADO; ?>">
					</div>


					<div class="form-group">
						<button class="btn btn-warning" style="margin-left: 650px;">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>