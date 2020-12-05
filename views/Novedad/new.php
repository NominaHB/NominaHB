<main class="container">
    <section class="row mt-5">
        <div class="card w-75 m-auto">
            <div class="card-header container">
                <h2 class="m-auto" style="font-size: 20px;">Agregar Novedad</h2>
            </div>
            <div class="card-body">
                <form action="?controller=novedad&method=save" method="post">
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label>Usuario</label>
                            <select id="ID_USUARIOS_FK" name="ID_USUARIOS_FK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                foreach ($usuario as $usuarios) {
                                ?>
                                    <option value="<?php echo $usuarios->ID_USUARIO ?>"><?php echo $usuarios->USUARIO ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>TipoNovedad</label>
                            <select id="TIPO_NOVEDAD_FK" name="TIPO_NOVEDAD_FK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                foreach ($tiponovedad as $tiponovedades) {
                                ?>
                                    <option value="<?php echo $tiponovedades->ID_TIPONOVEDAD ?>"><?php echo $tiponovedades->NOMBRE_TN ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Empleado</label>
                            <select id="EMPLEADOFK" name="EMPLEADOFK" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                foreach ($empleado as $empleados) 
                                     {
                                ?>
                                        <option value="<?php echo $empleados->ID_EMPLEADO; ?>"> <?php echo $empleados->NOMBRES." ".$empleados->APELLIDOS; ?></option>
                                    <?php
                                    }
                                

                                ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <input type="datetime-local" name="FECHA_INICIO" <?php echo date("H:i", strtotime("FECHA_INICIO")); ?> class="form-control" placeholder="Ingrese fecha de inicio de la novedad " required>
                        </div>
                        <div class="form-group">
                            <label>Fecha Fin</label>
                            <input type="datetime-local" name="FECHA_FIN" <?php echo date("H:i", strtotime("FECHA_FIN")); ?> class="form-control" placeholder="Ingrese fecha de fin de la novedad " required>
                        </div>
                        <div class="form-group">
                            <label>Días u Horas</label>
                            <input type="number" name="VALOR" class="form-control" placeholder="días u horas " required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</main>