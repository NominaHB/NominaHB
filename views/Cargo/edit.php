<main class="container">
	<seion class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px;">Editar Cargo</h2>
			</div>


			<div class="card-body">
				<form action="?controller=Cargo&method=update" method="post">

					<input type="hidden" name="ID_CARGO" value="<?php echo $data[0]->ID_CARGO; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="NOMBRE_CARGO" class="form-control" placeholder="Ingrese Nombre del cargo" value="<?php echo $data[0]->NOMBRE_CARGO; ?>">
					</div>

					<div class="form-group">
						<label>Estado</label>
						<select name="ESTADO_ID" class="form control">
							<option value="">Seleccione </option>
							<?php
							foreach ($Estado as $Estados) {
								if ($Estados->ID_ESTADO == $data[0]->ESTADO_ID) {
							?>
									<option selected value="<?php echo $Estados->ID_ESTADO; ?>"><?php echo $Estados->ESTADO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $Estados->ID_ESTADO; ?>"><?php echo $Estados->ESTADO; ?></option>
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