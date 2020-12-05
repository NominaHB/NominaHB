<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px;">Agregar estado</h2>
			</div>

			<div class="card-body">
				<form action="?controller=estado&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="estado" class="form-control" placeholder="Ingrese el nombre del estado" required>	
					</div>

                    <div class="form-group">
						<button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>