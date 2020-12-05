<?php 
require 'models/Estado.php';
require 'models/Cargo.php';

class CargoController 
	{
		private $model;
		private $Estados;
		public function __construct()
		{
			$this->Estados = new Estado;
			$this->model = new Cargo;
			
		}
        public function index()
	    {
			if ($_SESSION['usuario']->rol == "Administrador") {
				require 'views/layout.php';
		    $cargos = $this->model->getAll();
			require 'views/Cargo/list.php';
			echo '<p><a href="?controller=login"></p>';
			}else{
				header('Location: ?controller=home.php');
				header('Location: ?controller=Login');
			} 
			
    	    
	    }

	    public function add()
		{
			require 'views/layout.php';
			require 'views/Cargo/new.php';
		}

		public function save()
		{
			$this->model->newCargo($_REQUEST);			
			header('Location: ?controller=cargo');
		}

		public function edit()
		{
			if(isset($_REQUEST['ID_CARGO'])){
				$id = $_REQUEST['ID_CARGO'];
				$data = $this->model->getCargoById($id);
				$Estado= $this->Estados->getAll();
				require 'views/layout.php';
				require 'views/Cargo/edit.php';
			} else {
				echo "Error no existe usuario a editar";
			}

		}

		public function update()
		{
			if(isset($_POST)){
				$this->model->editCargo($_POST);
				header('Location: ?controller=cargo');
			} else {
				echo "Error Actulizando al usuario";
			}
		}

        public function delete()
		{
          $this->model->deleteCargo($_REQUEST);
          header('Location: ?controller=cargo');
		}
		//añadido

		public function updateEstado()
        {
            $cargo = $this->model->getCargoById($_REQUEST['ID_ESTADO']);
            $data = [];
    
            if( $cargo[0]->ESTADO_ID== 1) { 
                $data = [
                    'ID_CARGO' =>  $cargo[0]->ID_CARGO,
                    'ESTADO_ID' => 2
                ];
            } elseif( $cargo[0]->ESTADO_ID == 2) {
                $data = [
                    'ID_CARGO' =>  $cargo[0]->ID_CARGO,
                    'ESTADO_ID' => 1
                ];
            }
    
            $this->model->editEstado($data);
            header('Location: ?controller=cargo');
    
        }
	}
 ?>