<main class="container">
    <section class="row mt-5">
        <div class="card w-75 m-auto">
            <div class="card-header container">
                <h2 class="m-auto">Agregar Empleado </h2>
            </div>
            <div class="card-body">
                <form action="?controller=empleado&method=save" method="POST">
                    <div class="form-group">
                        <label>Identificación</label>
                        <input type="number" name="ID_EMPLEADO" class="form-control" placeholder="Ingrese el ID" required>
                    </div>
                    <div class="form-group">
                        <label>Nombres Empleado</label>
                        <input type="text" name="NOMBRES" class="form-control" placeholder="Ingrese el nombre" required>
                    </div>
                    <div class="form-group">
                        <label>Apellidos Empleado</label>
                        <input type="text" name="APELLIDOS" class="form-control" placeholder="Ingrese el apellido" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
                        <input type="date"  name="FECHA_INGRESO" required >
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" name="DIRECCION" class="form-control" placeholder="Ingrese la direccion" required >
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="TELEFONO" class="form-control" placeholder="Ingrese el numero de telefono" required >
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Salario</label>
                        <input type="number" name="SALARIO" class="form-control" placeholder="Ingrese el salario" required>
                    </div>
                    
                    <div class="col-md-8">
                            <label>Cargo</label>
                            <select id="ID_CARGO_FK" name="ID_CARGO_FK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                    foreach ($cargo as $cargos) {
                                        ?>
                                <option value="<?php echo $cargos->ID_CARGO ?>" required><?php echo $cargos->NOMBRE_CARGO ?></option>
                                <?php
                                    }
                                ?>
                            </select>
						</div>
                        <div class="col-md-8">
                            <label>Obra</label>
                            <select id="ID_OBRA_FK" name="ID_OBRA_FK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                    foreach ($obra as $obras) {
                                        ?>
                                <option value="<?php echo $obras->ID_OBRA ?>" required><?php echo $obras->NOMBRE_OBRA ?></option>
                                <?php
                                    }
                                ?>
                            </select>
						</div>
                        <div class="col-md-8">
                            <label>Contrato</label>
                            <select id="ID_CONTRATO_FK" name="ID_CONTRATO_FK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                    foreach ($contrato as $contratos) {
                                        ?>
                                <option value="<?php echo $contratos->ID_CONTRATO ?>" required><?php echo $contratos->TIPO_CONTRATO ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Departamento</label>
                            <select id="ID_DEPARTAMENTO_FK" name="ID_DEPARTAMENTO_FK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                    foreach ($departamento as $departamentos) {
                                        ?>
                                <option value="<?php echo $departamentos->ID_DPTO ?>" required><?php echo $departamentos->NOMBRE_DPTO ?></option>
                                <?php
                                    }
                                ?>
                            </select>
						</div>

                    <div class="form-group">
                    <button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>