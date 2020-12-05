<?php
require 'models/Estado.php';

    class EstadoController
    {
        private $model;

        public function __construct()
		{
			$this->model = new Estado;
        }
        public function index()
		{
			/*if($_SESSION['usuario']->rol == "administrador"){*/
				/*require 'views/layout.php';*/
				$estados = $this->model->getAll();
				require 'views/layout.php';
				require 'views/Estados/list.php';
			/*}else {
				header('Location: ?controller=home');
			}	*/
		}   
		public function add()
		{
			
			/*if($_SESSION['usuario']->rol == "administrador"){*/
            	require 'views/layout.php';
				require 'views/Estados/new.php';
			/*}else {
				header('Location: ?controller=home');
			}	*/
		}

		public function save()
		{
            $this->model->newEstado($_REQUEST);			
			header('Location: ?controller=estado');
		}

        
        public function edit()
		{
			
				if(isset($_REQUEST['ID_ESTADO'])){
					$ID_ESTADO = $_REQUEST['ID_ESTADO'];
					$data = $this->model->getEstadoById($ID_ESTADO);
            	    require 'views/layout.php';
					require 'views/Estados/edit.php';
				} else {
					echo "Error no existe el estado a editar";
				}	

		
        }
		public function update()
		{
			if(isset($_POST)){
				$this->model->editEstado($_POST);
				header('Location: ?controller=estado');
			} else {
				echo "Error Actualizando el estado";
			}
		}

		public function delete()
		{
			$this->model->deleteEstado($_REQUEST);
			header('Location: ?controller=estado');
		}  
    }