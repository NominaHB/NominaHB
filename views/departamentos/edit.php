
<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header">
				<h2 class="m-auto">Editar Departamento</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=departamento&method=update" method="post">

                    <input type="hidden" name="ID_DPTO" value="<?php echo $data[0]->ID_DPTO;?>">  

					<div class="form-group">
                        <label>Nombre Departamento</label>

                        <input type="text" name="NOMBRE_DPTO" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $data[0]->NOMBRE_DPTO ?>">
                    </div>
                    
                    <div class="form-group">
                        <label> Descripción</label>
						<input type="text" class="form-control" rows="3" name="DESCRIPCION_DPTO" placeholder="DESCRIPCION_DPTO" value="<?php echo $data[0]->DESCRIPCION_DPTO?>">
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

					<div class="form-group">
					<button class="btn btn-warning" style="margin-left: 650px;">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>