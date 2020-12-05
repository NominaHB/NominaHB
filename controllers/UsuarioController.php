<?php
require 'models/Usuario.php';
require 'models/Estado.php';
require 'models/Rol.php';
require 'models/Empleado.php';


    class UsuarioController
    {
		private $model;
		private $estado;
		private $rol;
		private $empleado;


        public function __construct()
		{
			$this->estado = new Estado;
			$this->model = new Usuario;
			$this->rol = new Rol;
			$this->empleado = new Empleado;

        }
        public function index()
		{
			if($_SESSION['usuario']->rol == "Administrador"){ 
				require 'views/layout.php';
				$usuario = $this->model->getAll();
				require 'views/Usuarios/list.php';
			}else {
				header('Location: ?controller=home');
			}	
		}   
		public function add()
		{
				require 'views/layout.php';
				require 'views/Usuarios/new.php';
		}

		public function save()
		{
            $this->model->newUsuario($_REQUEST);			
			header('Location: ?ontroller=usuario');
		}

        
        public function edit()
		{
			
				if(isset($_REQUEST['ID_USUARIO'])){
					$ID_USUARIO = $_REQUEST['ID_USUARIO'];
					$data = $this->model->getUsuarioById($ID_USUARIO);
					$estado= $this->estado->getAll();
					$rol= $this->rol->getAll();
					$empleado= $this->empleado->getAll();
            	    require 'views/layout.php';
					require 'views/Usuarios/edit.php';
				} else {
					echo "Error no existe el usuario a editar";
				}	

				
		}
		
		public function editPerfil()
		{
			$usuarioID =  $_SESSION['usuario']->USUARIO;
				if(isset($usuarioID)){
					$ID_USUARIO = $usuarioID;
					$data = $this->model->getUsuarioById($usuarioID);
					$estado= $this->estado->getAll();
					$rol= $this->rol->getAll();
					$empleado= $this->empleado->getAll();
            	    require 'views/layout.php';
					require 'views/Usuarios/editPerfil.php';
				} else {
					echo "Error no existe el usuario a editar";
				}	

				
		}

		public function update()
		{
			if(isset($_POST)){
				$this->model->editUsuario($_POST);
				header('Location: ?controller=usuario');
			} else {
				echo "Error Actualizando el usuario";
			}
		}

		public function delete()
		{
			$this->model->deleteUsuario($_REQUEST);
			header('Location: ?ontroller=Usuario');
		}  
		
		public function updateEstado()
        {
            $usuario = $this->model->getUsuarioById($_REQUEST['ID_ESTADO']);
            $data = [];
    
            if( $usuario[0]->ESTADO_ID== 1) { 
                $data = [
                    'ID_USUARIO' =>  $usuario[0]->ID_USUARIO,
                    'ESTADO_ID' => 2
                ];
            } elseif( $usuario[0]->ESTADO_ID == 2) {
                $data = [
                    'ID_USUARIO' =>  $usuario[0]->ID_USUARIO,
                    'ESTADO_ID' => 1
                ];
            }
    
            $this->model->editEstado($data);
            header('Location: ?controller=usuario');
    
        }
    }