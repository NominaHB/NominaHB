<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto" style="font-size: 20px;">Agregar usuario</h2>
			</div>

			<div class="card-body">
				<form action="?controller=usuario&method=save" method="post">
				
				<div class="col-md-8">
                            <label>Rol</label>
                            <select id="ID_ROL_FK" name="ID_ROL_FK" class="form-control" >
                                <option value="">Seleccione...</option>
                                <?php
                                foreach ($rol as $roles) {
                                ?>
                                    <option value="<?php echo $roles->ID_ROL ?>" required><?php echo $roles->NOMBRE ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                
					<div class="form-group">
						<label>Usuario</label>
						<input type="number" name="USUARIO" class="form-control" placeholder="Ingrese nuevo usuario del usuario" required>
					</div>
					
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="CONTRASENA" class="form-control" placeholder="Ingrese nueva contraseña del usuario" required>
					</div>

                    <div class="form-group">
						<button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>