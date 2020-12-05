<?php 
require 'models/Estado.php';
require 'models/Rol.php';

class RolController 
	{
		private $model;
		private $Estados;
		public function __construct()
		{
			$this->model = new Rol;
			$this->Estados = new Estado;
			
		}
        public function index()
	    {
			if($_SESSION['usuario']->rol == "Administrador"){
				require 'views/layout.php';
		    $roles = $this->model->getAll();
		    require 'views/Rol/list.php';
			}else{
				header('Location: ?controller=home');
			}
	    }

	    public function add()
		{
			require 'views/layout.php';
			require 'views/Rol/new.php';
		}

		public function save()
		{
			$this->model->newRol($_REQUEST);			
			header('Location: ?controller=rol');
		}

		public function edit()
		{
			if(isset($_REQUEST)){
				$id = $_REQUEST['ID_ROL'];
				$data = $this->model->getRolById($id);
				$Estado= $this->Estados->getAll();
				require 'views/layout.php';
				require 'views/Rol/edit.php';
			} else {
				echo "Error no existe rol a editar";
			}

		}

		public function update()
		{
			if(isset($_POST)){
				$this->model->editRol($_POST);
				header('Location: ?controller=rol');
			} else {
				echo "Error Actulizando al Rol";
			}
		}

        public function delete()
		{
          $this->model->deleteRol($_REQUEST);
          header('Location: ?controller=Rol');
		}

		public function updateEstado()
        {
            $rol = $this->model->getRolById($_REQUEST['ID_ESTADO']);
            $data = [];
    
            if( $rol[0]->ESTADO_ROL== 1) { 
                $data = [
                    'ID_ROL' =>  $rol[0]->ID_ROL,
                    'ESTADO_ROL' => 2
                ];
            } elseif($rol[0]->ESTADO_ROL == 2) {
                $data = [
                    'ID_ROL' =>  $rol[0]->ID_ROL,
                    'ESTADO_ROL' => 1
                ];
            }
    
            $this->model->editEstado($data);
            header('Location: ?controller=rol');
    
        }

	}
?>