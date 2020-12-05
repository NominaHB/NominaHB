<!DOCTYPE html>
<html>
<main class="container">	
	<seion class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header ">
				<h2 class="m-auto">Editar Contrato</h2>
			</div>
   <body background="assets/imagen/junta.jpg">
			<div class="card-body w-100">
				<form action="?controller=contrato&method=update" method="post">

					<input type="hidden" name="ID_CONTRATO" value="<?php echo $data[0]->ID_CONTRATO; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="TIPO_CONTRATO" class="form-control" placeholder="Ingrese tipo de contrato" value="<?php echo $data[0]->TIPO_CONTRATO; ?>">	
					</div>

					<div class="form-group">
						<label>Descripcion</label>
						<input type="text" name="DESCRIPCION" class="form-control" placeholder="Ingrese la descripcion del contrato" value="<?php echo $data[0]->DESCRIPCION; ?>">	
					</div>

					<div class="form-group">
						<label>Estado</label>
						<select name="ESTADO_ID" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($Estado as  $Estados) {
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
						</select>
					</div>
					
					<div class="form-group">
					<button class="btn btn-warning" style="margin-left: 650px;">Actualizar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
	</body>
	</html>
</main>