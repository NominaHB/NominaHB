<main class="container">
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Agregar  Obra</h2>
			</div>

			<div class="card-body">
				<form action="?controller=obra&method=save" method="POST" class="form-register" required>

					<!--<div class="form-group">
						<label>ID obra</label>
						<input type="text"id ="IDOBRA"  name="ID_OBRA" class="form-control" placeholder="Ingrese ID" >	
					</div>-->

					<div class="form-group">
						<label>Nombre de Obra</label>
						<input type="text" id ="NOMBREOBRA" name="NOMBRE_OBRA" class="form-control" placeholder="Ingrese Obra" required>	
					</div>


					<div class="form-group">
						<label>Representante</label>
						<input type="text"id ="REPRESENTANTE"  name="REPRESENTANTE" class="form-control" placeholder="Ingrese Nombres Completos" required>	
					</div>

					<div class="form-group">
						<label>Direccion de Obra</label>
						<input type="text"id ="DIRECCIONOBRA"  name="DIRECCION_OBRA" class="form-control" placeholder="Ingrese Nombres Completos" required>	
					</div>

         

					<div class="form-group">
					<button class="btn btn-warning" style="margin-left: 650px;">Guardar</button>
					
					</div>
				</form>
			</div>
		</div>	
	</section>
</main>
 <script src="assets/js/formulario.js"></script>
