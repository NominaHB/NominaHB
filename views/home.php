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
    <?php
     if ($_SESSION['usuario']->rol == "Empleado") {
    ?>
        <h1>Bienvenido <?php echo $_SESSION['usuario']->USUARIO?></h1>
        <h2>Su Rol es: <?php echo $_SESSION['usuario']->rol?></h2>
     <?php }
     ?>
        <?php 
            if ($_SESSION['usuario']->rol == "Administrador")
             {
        ?>
           <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style=" margin-top: 20px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card-header container">
                                <h2  style=" font-family: Miriam; ">Nómina</h2>
                            </div>
                            <table class="table table-striped table-bordered text-inputs-searching">
                                <thead style="background-color:#FF9A00; color: white;" align="center">
                    <tr>
                        <th>Identificacion</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Cargo</th>
                        <th>Salario</th>
                        <th>Salud</th>
                        <th>Pension</th>
                        <th>Hora Extra</th>
                        <th>Hora Dominical</th>
                        <th>Vacaciones</th>
                        <th>Total Devengado</th>
                        <th>Total Deducido</th>
                        <th>Total A Pagar</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
					foreach ($novedades as $novedad) {
                    ?>
                    <tr>
                    <td><?php echo $novedad->ID_EMPLEADO ?></td>
                    <td><?php echo $novedad->NOMBRES ?></td>
                    <td><?php echo $novedad->APELLIDOS ?></td>
                    <td><?php echo $novedad->NOMBRE_CARGO ?></td>
                    <td><?php echo '$'.number_format($novedad->SALARIO)?></td>
                    <td><?php echo '$'.number_format($novedad->Salud) ?></td>
                    <td><?php echo '$'.number_format($novedad->Pension) ?></td>
                    <td><?php echo '$'.number_format($novedad->HoraExtra)?></td>
                    <td><?php echo '$'.number_format($novedad->HoraDominical) ?></td>
                    <td><?php echo '$'.number_format($novedad->Vacaciones) ?></td>
                    <td><?php echo '$'.number_format($novedad->TotalDevengado) ?></td>
                    <td><?php echo '$'.number_format($novedad->TotalDeducido) ?></td>
                    <td><?php echo '$'.number_format($novedad->TotalAPagar) ?></td>
                    </tr>
                    <?php
									}
									?>
                                    <tfoot>
                                    <th>Identificacion</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
                                    <th>Salario</th>
                                    <th>Salud</th>
                                    <th>Pension</th>
                                    <th>Hora Extra</th>
                                    <th>Hora Dominical</th>
                                    <th>Vacaciones</th>
                                    <th>Total Devengado</th>
                                    <th>Total Deducido</th>
                                    <th>Total A Pagar</th>
                                </tfoot>
                </tbody>
            </table>
            <?php 
             }?>
        </section>
        </section>
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
