<main class="container">

	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header">
				<h2 class="m-auto">Editar Empleado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=empleado&method=update" method="post">

                    <input type="hidden" name="ID_EMPLEADO" value="<?php echo $data[0]->ID_EMPLEADO;?>">  

					<div class="form-group">
                        <label>Nombre Empleado</label>
                        <input type="text" name="NOMBRES" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $data[0]->NOMBRES?>">
                    </div>
                    <div class="form-group">
                        <label>Apellido Empleado</label>
                        <input type="text" name="APELLIDOS" class="form-control" placeholder="Ingrese el apellido" value="<?php echo $data[0]->APELLIDOS?>">
                    </div>
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
						<input type="date" id="FECHA_INGRESO" name="FECHA_INGRESO" value="<?php echo $data[0]->FECHA_INGRESO?>">
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" name="Direccion" class="form-control" placeholder="Ingrese la direccion" value="<?php echo $data[0]->DIRECCION?>">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="Telefono" class="form-control" placeholder="Ingrese el numero de telefono" value="<?php echo $data[0]->TELEFONO?>">
                    </div>
                    <div class="form-group">
                        <label>Salario</label>
                        <input type="number" name="Salario" class="form-control" placeholder="Ingrese el salario" value="<?php echo $data[0]->SALARIO?>">
                    </div>
                    <div class="form-group">
						<label>Cargo</label>
						<select id="ID_CARGO_FK" name="ID_CARGO_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($cargo as  $cargos) {
								if ($cargos->ID_CARGO == $data[0]->ID_CARGO_FK) {
							?>
									<option selected value="<?php echo $cargos->ID_CARGO; ?>"><?php echo $cargos->NOMBRE_CARGO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $cargos->ID_CARGO; ?>"><?php echo $cargos->NOMBRE_CARGO; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>
                    <div class="form-group">
						<label>Obra</label>
						<select id="ID_OBRA_FK" name="ID_OBRA_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($obra as  $obras) {
								if ($obras->ID_OBRA == $data[0]->ID_OBRA_FK) {
							?>
									<option selected value="<?php echo $obras->ID_OBRA; ?>"><?php echo $obras->NOMBRE_OBRA; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $obras->ID_OBRA; ?>"><?php echo $obras->NOMBRE_OBRA; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>
                    <div class="form-group">
						<label>Contrato</label>
						<select id="ID_CONTRATO_FK" name="ID_CONTRATO_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($contrato as  $contratos) {
								if ($contratos->ID_CONTRATO == $data[0]->ID_DEPARTAMENTO_FK) {
							?>
									<option selected value="<?php echo $contratos->ID_CONTRATO; ?>"><?php echo $contratos->TIPO_CONTRATO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $contratos->ID_CONTRATO; ?>"><?php echo $contratos->TIPO_CONTRATO; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>
                    <div class="form-group">
						<label>Departamento</label>
						<select id="ID_DEPARTAMENTO_FK" name="ID_DEPARTAMENTO_FK" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($departamento as  $departamentos) {
								if ($departamentos->ID_DPTO == $data[0]->ID_DEPARTAMENTO_FK) {
							?>
									<option selected value="<?php echo $departamentos->ID_DPTO; ?>"><?php echo $departamentos->NOMBRE_DPTO; ?></option>
								<?php
								} else {
								?>
									<option value="<?php echo $departamentos->ID_DPTO; ?>"><?php echo $departamentos->NOMBRE_DPTO; ?></option>
							<?php
								}
							}

							?>
						</select>
					</div>
                    <div class="form-group">
						<label>Estado</label>
						<select id="ESTADO_ID" name="ESTADO_ID" class="form-control">
							<option value="">Seleccione...</option>
							<?php
							foreach ($estado as  $Estados) {
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
</main>