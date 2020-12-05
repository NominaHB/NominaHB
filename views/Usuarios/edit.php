
<main class="container">

	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px">Editar Usuario</h2>
			</div>

			<div class="card-body">
				<form action="?controller=usuario&method=update" method="post">

					<input type="hidden" name="ID_USUARIO" value="<?php echo $data[0]->ID_USUARIO; ?>">
					
					<div class="form-group">
						<label>Rol</label>
						<select  id="ID_ROL_FK" name="ID_ROL_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($rol as $roles) {
								if ($roles->ID_ROL == $data[0]->ID_ROL_FK) {
							?>
									<option selected value="<?php echo $roles->ID_ROL; ?>"><?php echo $roles->NOMBRE; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $roles->ID_ROL; ?>"><?php echo $roles->NOMBRE; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>
                
					<div class="form-group">
						<label>Usuario</label>
						<select id="USUARIO" name="USUARIO" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($empleado as $empleados) {
								if ($empleados->ID_EMPLEADO == $data[0]->USUARIO) {
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
						<label>Contraseña</label>
						<input type="password" disabled name="CONTRASENA" class="form-control" value="<?php echo $data[0]->CONTRASENA; ?>">
					</div>
					<div class="form-group">
						<label>Correo</label>
						<input type="text" name="CORREO" class="form-control"  value="<?php echo $data[0]->CORREO; ?>">
					</div>

					<div class="form-group">
						<label>Estado</label>
						<select name="ESTADO_ID" id="ESTADO_ID"  class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($estado as  $estados) {
								if ($estados->ID_ESTADO == $data[0]->ESTADO_ID) {
							?>
									<option selected value="<?php echo $estados->ID_ESTADO; ?>"><?php echo $estados->ESTADO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $estados->ID_ESTADO;?>"><?php echo $estados->ESTADO; ?></option>
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