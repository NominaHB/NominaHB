<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header ">
				<h2 class="m-auto">Editar Rol</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rol&method=update" method="post">

					<input type="hidden" name="ID_ROL" value="<?php echo $data[0]->ID_ROL; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="NOMBRE" class="form-control" placeholder="Ingrese Nombre del rol" value="<?php echo $data[0]->NOMBRE; ?>">	
					</div>
					
					<div class="form-group">
						<label>Estado</label>
						<select name="ESTADO_ID" id="ESTADO_ID" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($Estado as  $Estados) {
								if ($Estados->ID_ESTADO == $data[0]->ESTADO_ROL) {
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
</main>