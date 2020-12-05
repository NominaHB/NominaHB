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
                <h2 class="m-auto" style=" font-family: Miriam; ">Obras<a style="margin-left: 800px; border-radius: 100%;  " href="?controller=obra&method=add" class="btn btn-outline-success"><i class="mdi mdi-plus"></i></a></h2>
              </div>
              <table class="table table-striped table-bordered text-inputs-searching">
                <thead style="background-color:#293445; color: white;" align="center">

                  <th>Id Obra</th>
                  <th>Nombre Obra</th>
                  <th>Representante</th>
                  <th>Direccion</th>
                  <th>Estados</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  <?php foreach ($obras as $obra) {
                  ?>
                    <tr>
                      <td><?php echo $obra->ID_OBRA ?></td>
                      <td><?php echo $obra->NOMBRE_OBRA ?></td>
                      <td><?php echo $obra->REPRESENTANTE ?></td>
                      <td><?php echo $obra->DIRECCION_OBRA ?></td>
                      <td><?php echo $obra->ESTADO ?></td>
                      <td align="center">

                        <a class="btn btn-outline-info" href="?controller=obra&method=edit&ID_OBRA=<?php echo $obra->ID_OBRA ?>"><i class=" fa fa-edit"></i></a>

                        <!--<a href="?controller=obra&method=delete&ID_OBRA= <?php echo $obra->ID_OBRA ?>" class=" btn btn-outline-danger"><i class=" fa fa-trash-alt"></i></a>
                  --><?php
										if ($obra->ESTADO_ID == 1) {
										?>
													<input onchange="Prueba(this,'?controller=obra&method=updateestado&ID_ESTADO=<?php echo $obra->ID_OBRA ?>')" type="checkbox" data-toggle="warning" data-onstyle="warning" data-offstyle="danger" class="toggle-two"></input>
												<?php
											} elseif ($obra->ESTADO_ID  == 2) {
												?>
													<input onchange="Prueba(this,'?controller=obra&method=updateestado&ID_ESTADO=<?php echo $obra->ID_OBRA ?>')" type="checkbox" data-toggle="warning" data-onstyle="warning" data-offstyle="danger" class="toggle-two" checked></input>
												<?php
											}
												?>

                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Id Obra</th>
                    <th>Nombre Obra</th>
                    <th>Representante</th>
                    <th>Direccion</th>
                    <th>Estados</th>


                  </tr>
                </tfoot>
              </table>

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

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



</main>