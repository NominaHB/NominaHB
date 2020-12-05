<main>
    <script type="text/javascript">
    function Prueba(Control, url) {
        if ($(Control).is(':checked')) {
            setTimeout(function() {
                window.location.href = url;
            }, 1000);
        } else {
            setTimeout(function() {
                window.location.href = url;
            }, 1000);
        }

        var $list = $(":input[type='search']");
        $list.each(function() {
            $(this).val('').change();
        });
        $('.txtBusqueda').val('').change();
    }


    $(document).ready(function() {

    });
    </script>
    <style>
    .txtBusqueda {
        width: 100%;
        max-width: 410px;
    }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style=" margin-top: 20px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card-header container">
                                <h3 class="m-auto" style=" font-family: Miriam; width: 100%;">Empleados<a
                                        style="margin-left: 900px; margin-top:-50px; border-radius: 100%;  "
                                        href="?controller=empleado&method=add" class="btn btn-outline-success"
                                        title="agregar"><i class="mdi mdi-plus"></i></a><a
                                        style="margin-left: 900px; margin-top:-10px; border-radius: 100%;  "
                                        href="?controller=home" class="btn btn-outline-primary"
                                        title="Ver Nomina de Empleados"><i class="mdi mdi-eye"></i></a>
                                        </h3>
                            </div>
                            <table class="table table-striped table-bordered text-inputs-searching">
                                <thead style="background-color:#293445; color: white;" align="center">
                                    <tr>
                                        <th style="width: 5%;">Identificación</th>
                                        <th style="width: 8%;">Nombres </th>
                                        <th style="width: 8%;">Apellidos </th>
                                        <th style="width: 10%;">Fecha ingreso</th>
                                        <th style="width: 10%;">Direccion</th>
                                        <th style="width: 10%;">Telefono</th>
                                        <th style="width: 8%;">Salario</th>
                                        <th style="width: 6%;">Cargo</th>
                                        <th style="width: 6%;">Obra</th>
                                        <th style="width: 8%;">Contrato</th>
                                        <th style="width: 8%;">Departamento</th>
                                        <th style="width: 6%;">Estados</th>
                                        <th style="width: 12%;">Acciones</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($empleados as $empleado) {  ?>
                                    <tr>
                                        <td><?php echo $empleado->ID_EMPLEADO ?></td>
                                        <td><?php echo $empleado->NOMBRES ?></td>
                                        <td><?php echo $empleado->APELLIDOS ?></td>
                                        <td><?php echo $empleado->FECHA_INGRESO ?></td>
                                        <td><?php echo $empleado->DIRECCION ?></td>
                                        <td><?php echo $empleado->TELEFONO ?></td>
                                        <td><?php echo $empleado->SALARIO ?></td>
                                        <td><?php echo $empleado->NOMBRE_CARGO ?></td>
                                        <td><?php echo $empleado->NOMBRE_OBRA ?></td>
                                        <td><?php echo $empleado->TIPO_CONTRATO ?></td>
                                        <td><?php echo $empleado->NOMBRE_DPTO ?></td>
                                        <td><?php echo $empleado->ESTADO ?></td>

                                        <td align="center">
                                            <a href="?controller=empleado&method=edit&ID_EMPLEADO=<?php echo $empleado->ID_EMPLEADO  ?>"
                                                class="btn btn-outline-primary" title="editar"><i
                                                    class="mdi mdi-pencil-box-outline"></i></a>
                                            <!--<a href="?controller=tiponovedad&method=delete&ID_TIPONOVEDAD=<?php /*echo $TipoNovedad->ID_TIPONOVEDAD */?>" class="btn btn-outline-danger" title="elimiar"><i class=" mdi mdi-delete-empty"></i></a>-->

                                            <?php
												if ($empleado->ID_ESTADO == 1) {
												?>
                                            <input
                                                onchange="Prueba(this,'?controller=empleado&method=updateestado&ID_ESTADO=<?php echo $empleado->ID_EMPLEADO ?>')"
                                                type="checkbox" data-toggle="warning" data-onstyle="warning"
                                                data-offstyle="danger" class="toggle-two"></input>
                                            <?php
												} elseif ($empleado->ID_ESTADO  == 2) {
												?>
                                            <input
                                                onchange="Prueba(this,'?controller=empleado&method=updateestado&ID_ESTADO=<?php echo $empleado->ID_EMPLEADO ?>')"
                                                type="checkbox" data-toggle="warning" data-onstyle="warning"
                                                data-offstyle="danger" class="toggle-two" checked></input>
                                            <?php
												}
												?>
                                        </td>

                                    </tr>
                                    <?php } ?>
                                <tfoot>
                                    <tr>
                                        <th>Id empleado</th>
                                        <th>Nombre empleado</th>
                                        <th>Apellido empleado</th>
                                        <th>Fecha ingreso</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Salario</th>
                                        <th>Cargo</th>
                                        <th>Obra</th>
                                        <th>Departamento</th>
                                        <th>Estados</th>
                                        <th>Acciones</th>


                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                            </section>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.horizontal.js"></script>
    <script src="../../dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="../../dist/js/pages/datatable/datatable-api.init.js"></script>
    <!--link button switch-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</main>