<main>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card" style=" margin-top: 20px;">
					<div class="card-body">
						<div class="table-responsive">
							<div class="card-header container">
								<h2 class="m-auto" style=" font-family: Miriam; ">Estados<a style="margin-left: 800px; border-radius: 100%;  " href="?controller=estado&method=add" class="btn btn-outline-success" title="agregar"><i class="mdi mdi-plus"></i></a></h2>
							</div>
							<table class="table table-striped table-bordered text-inputs-searching">
								<thead style="background-color:#293445; color: white;" align="center">
									<th>Id</th>
									<th>Estado</th>
									<th>Acciones</th>
								</thead>
								<tbody>
									<?php
									foreach ($estados as $estado) {
									?>
										<tr>
											<td><?php echo $estado->ID_ESTADO ?></td>
											<td><?php echo $estado->ESTADO ?></td>
											<td align="center">

												<a class="btn btn-outline-primary"  href = "?controller=estado&method=edit&ID_ESTADO=<?php echo $estado->ID_ESTADO  ?>" title="editar"><i class="mdi mdi-pencil-box-outline"></i></a>

												<a href="?controller=estado&method=delete&ID_ESTADO=<?php echo $estado->ID_ESTADO ?>" class=" btn btn-outline-danger" title="elimiar"><i class=" mdi mdi-delete-empty"></i></a>

											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>Id</th>
										<th>Estado</th>

									</tr>
								</tfoot>
							</table>
							<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLabel1">New message</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<form>
												<form action="?controller=estado&method=update" method="post">

													<input type="hidden" name="ID_ESTADO" value="</*?php echo $data[0]->ID_ESTADO; ?>">

													<div class="form-group">
														<label>Nombre</label>
														<input type="text" name="estado" class="form-control" placeholder="Ingrese nuevo nombre del estado" value="</*?php echo $data[0]->ESTADO; ?*/>">
													</div>


													<div class="form-group">
														<button class="btn btn-warning">Actualizar</button>
													</div>
												</form>
												<div id="PageOne" style="width: 100%;height: 350px;overflow-x: scroll;overflow-y: scroll;">

												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Send message</button>
										</div>
									</div>
								</div>
							</div>-->
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



</main>