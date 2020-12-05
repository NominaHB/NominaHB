<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header ">
				<h2 class="m-auto">Editar Obra</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=obra&method=update" method="post">
					<div class="form-group">
						<input type="hidden" name="ID_OBRA" value="<?php echo $data[0]->ID_OBRA; ?>">
					</div>

					<div class="form-group">
						<label>Nombre Obra</label>
						<input type="text" name="NOMBRE_OBRA" class="form-control" placeholder="Ingrese el nombre de la obra" value="<?php echo $data[0]->NOMBRE_OBRA; ?>">
					</div>

					<div class="form-group">
						<label>Representante</label>
						<input type="text" name="REPRESENTANTE" class="form-control" placeholder="Ingrese Email" value="<?php echo $data[0]->REPRESENTANTE; ?>">
					</div>

					<div class="form-group">
						<label>Direccion</label>
						<input type="text" name="DIRECCION_OBRA" class="form-control" placeholder="Ingrese Email" value="<?php echo $data[0]->DIRECCION_OBRA; ?>">
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