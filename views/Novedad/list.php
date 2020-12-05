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
                                <h3 class="m-auto" style=" font-family: Miriam; "> Novedades<a
                                        style="margin-left: 900px; margin-top:-50px; border-radius: 100%;  "
                                        href="?controller=novedad&method=add" class="btn btn-outline-success"
                                        title="agregar"><i class="mdi mdi-plus"></i></a></h3>
                            </div>
                            <table class="table table-striped table-bordered text-inputs-searching">
                                <thead style="background-color:#293445; color: white;" align="center">
                                    <tr>
                                        <th style="width: 5%;">id</th>
                                        <th style="width: 8%;">Usuario</th>
                                        <th style="width: 10%;">TpoNovedad</th>
                                        <th style="width: 10%;">Empleado</th>
                                        <th style="width: 10%;">FechaInicio</th>
                                        <th style="width: 12%;">FechaFin</th>
                                        <th style="width: 5%;">Horas o Dias</th>
                                        <th style="width: 10%;">Estado</th>
                                        <th style="width: 20%;">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									foreach ($novedades as $Novedad) { ?>
                                    <tr>
                                        <td><?php echo $Novedad->ID_NOVEDAD ?></td>
                                        <td><?php echo $Novedad->USUARIO ?></td>
                                        <td><?php echo $Novedad->NOMBRE_TN ?></td>
                                        <td><?php echo $Novedad->NOMBRES." ".$Novedad->APELLIDOS?></td>
                                        <td><?php echo $Novedad->FECHA_INICIO ?></td>
                                        <td><?php echo $Novedad->FECHA_FIN ?></td>
                                        <td><?php echo $Novedad->VALOR ?></td>
                                        <td><?php echo $Novedad->ESTADO ?></td>
                                        <td align="center">
                                            <a href="?controller=novedad&method=edit&ID_NOVEDAD=<?php echo $Novedad->ID_NOVEDAD  ?>"
                                                class="btn btn-outline-primary" title="editar"><i
                                                    class="mdi mdi-pencil-box-outline"></i></a>
                                            <!--<a href="?controller=tiponovedad&method=delete&ID_TIPONOVEDAD=<?php /*echo $TipoNovedad->ID_TIPONOVEDAD */ ?>" class="btn btn-outline-danger" title="elimiar"><i class=" mdi mdi-delete-empty"></i></a>-->

                                            <?php
												if ($Novedad->ESTADO_ID == 1) {
											?>
                                            <input
                                                onchange="Prueba(this,'?controller=novedad&method=updateestado&ID_ESTADO=<?php echo $Novedad->ID_NOVEDAD ?>')" type="checkbox" data-toggle="warning" data-onstyle="warning"data-offstyle="danger" class="toggle-two"></input>
                                            <?php
												} elseif ($Novedad->ESTADO_ID == 2) {
												?>
                                            <input
                                                onchange="Prueba(this,'?controller=novedad&method=updateestado&ID_ESTADO=<?php echo $Novedad->ID_NOVEDAD ?>')"type="checkbox" data-toggle="warning" data-onstyle="warning"data-offstyle="danger" class="toggle-two" checked></input>
                                            <?php
												}
												?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Usuario</th>
                                        <th>TpoNovedad</th>
                                        <th>Empleado</th>
                                        <th>FechaInicio</th>
                                        <th>FechaFin</th>
                                        <th>Valor</th>
                                        <th>Estado</th>

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