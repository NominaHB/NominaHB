<?php 
require 'models/Estado.php';
require 'models/Contrato.php';

class ContratoController 
	{
		private $model;
		private $Estados;
		public function __construct()
		{
			$this->Estados = new Estado;
			$this->model = new Contrato;
			
		}
        public function index()
	    {
			if ($_SESSION['usuario']->rol == "Administrador" ) {
				require 'views/layout.php';
		    $contratos = $this->model->getAll();
		    require 'views/contrato/list.php';
			}else{
				header('Location: ?controller=home.php');
				header('Location: ?controller=Login');
			} 
			
    	    
	    }

	    public function add()
		{
			require 'views/layout.php';
			require 'views/contrato/new.php';
		}

		public function save()
		{
			$this->model->newContrato($_REQUEST);			
			header('Location: ?controller=contrato');
		}

		public function edit()
		{
			if(isset($_REQUEST['ID_CONTRATO'])){
				$id = $_REQUEST['ID_CONTRATO'];
				$data = $this->model->getContratoById($id);
				$Estado= $this->Estados->getAll();
				require 'views/layout.php';
				require 'views/Contrato/edit.php';
			} else {
				echo "Error no existe contrato a editar";
			}

		}

		public function update()
		{
			if(isset($_POST)){
				$this->model->editContrato($_POST);
				header('Location: ?controller=contrato');
			} else {
				echo "Error Actulizando al Contrato";
			}
		}

        public function delete()
		{
          $this->model->deleteContrato($_REQUEST);
          header('Location: ?controller=Contrato');
		}
		//añadido

        public function updateEstado()
        {
        $contrato= $this->model->getContratoById($_REQUEST['ID_ESTADO']);
        $data = [];

        if($contrato[0]->ESTADO_ID == 1) {
            $data = [
                'ID_CONTRATO' => $contrato[0]->ID_CONTRATO,
                'ESTADO_ID' => 2
            ];
        } elseif($contrato[0]->ESTADO_ID == 2) {
            $data = [
                'ID_CONTRATO' => $contrato[0]->ID_CONTRATO,
                'ESTADO_ID' => 1
            ];
        }
        $this->model->editEstado($data);
        header('Location: ?controller=Contrato');
      }

	}
