<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px;">Editar  Novedad</h2>
			</div>

			<div class="card-body">
				<form action="?controller=novedad&method=update" method="post">

					<input type="hidden" name="ID_NOVEDAD" value="<?php echo $data[0]->ID_NOVEDAD; ?>">

					<div class="form-group">
						<label>Usuario</label>
						<select id="ID_USUARIOS_FK" name="ID_USUARIOS_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($usuario as $usuarios) {
								if ($usuarios->ID_USUARIO == $data[0]->ID_USUARIOS_FK) {
							?>
									<option selected value="<?php echo $usuarios->ID_USUARIO; ?>"><?php echo $usuarios->USUARIO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $usuarios->ID_USUARIO; ?>"><?php echo $usuarios->USUARIO; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>

					<div class="form-group">
						<label>Tipo Novedad</label>
						<select id="TIPO_NOVEDAD_FK" name="TIPO_NOVEDAD_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($tiponovedad as $tiponovedades) {
								if ($tiponovedades->ID_TIPONOVEDAD == $data[0]->TIPO_NOVEDAD_FK) {
							?>
									<option selected value="<?php echo $tiponovedades->ID_TIPONOVEDAD; ?>"><?php echo $tiponovedades->NOMBRE_TN; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $tiponovedades->ID_TIPONOVEDAD; ?>"><?php echo $tiponovedades->NOMBRE_TN; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>

					<div class="form-group">
						<label>Empleado</label>
						<select id="EMPLEADOFK" name="EMPLEADOFK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($empleado as $empleados) {
								if ($empleados->ID_EMPLEADO == $data[0]->EMPLEADOFK) {
							?>
									<option selected value="<?php echo $empleados->ID_EMPLEADO; ?>"><?php echo $empleados->ID_EMPLEADO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $empleados->ID_EMPLEADO; ?>"><?php echo $empleados->ID_EMPLEADO; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>
					<div class="form-group">
						<label>fecha Inicio</label>
						<input type="text" name="FECHA_INICIO" class="form-control" placeholder="" value="<?php echo $data[0]->FECHA_INICIO; ?>">
					</div>
					<div class="form-group">
						<label>Fecha Fin</label>
						<input type="text" name="FECHA_FIN" class="form-control" placeholder="" value="<?php echo $data[0]->FECHA_FIN; ?>">
					</div>
					<div class="form-group">
						<label>Horas O Dias</label>
						<input type="text" name="VALOR" class="form-control" placeholder="Ingrese nuevo porcentaje del tipo" value="<?php echo $data[0]->VALOR; ?>">
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