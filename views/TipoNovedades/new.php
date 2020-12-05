<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto"  style="font-size: 20px;">Agregar Tipo de Novedad</h2>
			</div>
			<div class="card-body">
				<form action="?controller=tiponovedad&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="NOMBRE_TN" class="form-control" placeholder="Ingrese el nombre del tipo novedad" required>	
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<input type="text" name="DESCRIPCION" class="form-control" placeholder="Ingrese la descripción del tipo novedad" required>	
					</div>
					<div class="form-group">
						<label>Porcentaje</label>
						<input type="number" name="PORCENTAJE" class="form-control" step="any" placeholder="Ingrese el porcentaje "required>	
					</div>
                    <div class="form-group">
						<button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>