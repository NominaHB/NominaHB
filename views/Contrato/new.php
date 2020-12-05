<main class="container">
	<section class="row mt-5">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Ingregar Contrato</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=contrato&method=save" method="post">
					<div class="form-group">
						<label>Tipo de contrato</label>
						<input type="text" name="TIPO_CONTRATO" class="form-control" placeholder="Ingrese Nombre el tipo de contrato" required>	
					</div>

					<div class="form-group">
						<label>Descripcion</label>
						<input type="text" name="DESCRIPCION" class="form-control" placeholder="Ingrese la descripcion del contrato" required>	
					</div>

					
					<div class="form-group">
					<button class="btn btn-warning" style="margin-left: 400px;">Guardar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>