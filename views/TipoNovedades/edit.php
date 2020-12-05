<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px;">Editar Tipo de Novedad</h2>
			</div>

			<div class="card-body">
				<form action="?controller=tiponovedad&method=update" method="post">

					<input type="hidden" name="ID_TIPONOVEDAD" value="<?php echo $data[0]->ID_TIPONOVEDAD; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="NOMBRE_TN" class="form-control" placeholder="Ingrese nuevo nombre del tipo" value="<?php echo $data[0]->NOMBRE_TN; ?>">
					</div>

					<div class="form-group">
						<label>Descripción</label>
						<input type="text" name="DESCRIPCION" class="form-control" placeholder="Ingrese nueva descripcion del tipo" value="<?php echo $data[0]->DESCRIPCION; ?>">
					</div>

					<div class="form-group">
						<label>Porcentaje</label>
						<input type="text" name="PORCENTAJE" class="form-control" placeholder="Ingrese nuevo porcentaje del tipo" value="<?php echo $data[0]->PORCENTAJE; ?>">
					</div>

					<div class="form-group">
						<label>Estado</label>
						<select name="ESTADO_ID" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($estado as  $estados) {
								if ($estados->ID_ESTADO == $data[0]->ESTADO_ID) {
							?>
									<option selected value="<?php echo $estados->ID_ESTADO; ?>"><?php echo $estados->ESTADO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $estados->ID_ESTADO; ?>"><?php echo $estados->ESTADO; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>

					<div class="form-group">
					<button class="btn btn-warning" style="margin-left: 650px;">Actualizar</button>

					</div>
				</form>
			</div>
		</div>
	</section>
</main>