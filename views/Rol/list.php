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
								<link rel="stylesheet" type="text/css" href="fonts/style.css">
								<h2 class="m-auto" style=" font-family: Miriam; ">Roles<a style="margin-left: 800px; border-radius: 100%;  " href="?controller=rol&method=add" class="btn btn-outline-success" title="agregar"><i class="mdi mdi-plus"></i></a></h2>
							</div>
							<table class="table table-striped table-bordered text-inputs-searching">
								<thead style="background-color:#293445; color: white;" align="center">
									<th style="width: 10%;">Id</th>
									<th style="width: 35%;">Nombre</th>
									<th style="width: 20%;">Estado</th>
									<th style="width: 40%;">Acciones</th>
								</thead>
								<tbody>
									<?php
									foreach ($roles as $rol) {
									?>
										<tr>
											<td><?php echo $rol->ID_ROL ?></td>
											<td><?php echo $rol->NOMBRE ?></td>
											<td><?php echo $rol->ESTADO ?></td>
											<td align="center">

												<a href="?controller=rol&method=edit&ID_ROL=<?php echo $rol->ID_ROL  ?>" class="btn btn-outline-primary" title="editar"><i class="mdi mdi-pencil-box-outline"></i></a>

												<!--<a href="?controller=rol&method=delete&ID_ROL=<?php echo $rol->ID_ROL ?>" class=" btn btn-outline-danger"><i class="icon-trash"></i></a>
									--><?php
										if ($rol->ESTADO_ROL == 1) {
										?>
													<input onchange="Prueba(this,'?controller=rol&method=updateestado&ID_ESTADO=<?php echo $rol->ID_ROL ?>')" type="checkbox" data-toggle="warning" data-onstyle="warning" data-offstyle="danger" class="toggle-two"></input>
												<?php
											} elseif ($rol->ESTADO_ROL  == 2) {
												?>
													<input onchange="Prueba(this,'?controller=rol&method=updateestado&ID_ESTADO=<?php echo $rol->ID_ROL ?>')" type="checkbox" data-toggle="warning" data-onstyle="warning" data-offstyle="danger" class="toggle-two" checked></input>
												<?php
											}
												?>
											</td>
										</tr>
									<?php
									}
									?>
								<TFoot>
									<tr>

										<th>Id</th>
										<th>Nombre</th>
										<th>Estado</th>

										</th>
									</tr>
								</TFoot>
								</tbody>
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
	<!--link button switch-->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


</main>