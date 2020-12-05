<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Agregar Departamento </h2>
			</div>

			<div class="card-body">
				<form action="?controller=departamento&method=save" method="POST">
					<div class="form-group">
						<label>Nombre del Departamento</label>
						<input type="text" name="NOMBRE_DPTO" class="form-control" placeholder="Ingrese Nombre del Departamento"required>	
					</div>

					<div class="form-group">
						<label>Descripcion</label>
						<input type="text" name="DESCRIPCION_DPTO" class="form-control" placeholder="Ingrese Nombres Completos"required>	
					</div>
					

					<div class="form-group">
					<button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>