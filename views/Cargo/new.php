<main class="container">
	<section class="row mt-5">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px;">Agregar del Cargo</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=cargo&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="NOMBRE_CARGO" class="form-control" placeholder="Ingrese Nombre del cargo" required>	
					</div>

					
					<div class="form-group">
						<button class="btn btn-warning" style="margin-left: 400px;">Guardar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>