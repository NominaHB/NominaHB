<?php
require 'models/Empleado.php';
require 'models/Estado.php';
require 'models/Cargo.php';
require 'models/Contrato.php';
require 'models/Departamento.php';
require 'models/Obra.php';

class EmpleadoController
{
    private $model;
	private $estado;
	private $cargo;
	private $contrato;
    private $departamento;
    private $obra;

    public function __construct()
    {
        
            $this->model = new Empleado;
            $this->estado = new Estado;
            $this->cargo = new Cargo;
            $this->contrato = new Contrato;
            $this->departamento = new Departamento;
            $this->obra = new Obra;
    }
    public function index(){
        if ($_SESSION['usuario']->rol == "Administrador" ){
            require 'views/layout.php';
            $empleados=$this->model->getAll();
            require 'views/Empleado/list.php';
        }else{
            header('Location: ?controller=home.php');
            header('Location: ?controller=Login');
        } 
       
    }
    public function new()
    {
        require 'views/layout.php';
        require 'views/Empleado/new.php';
    }
    public function save()
    {
        $this->model->newEmpleado($_REQUEST);
        header('Location: ?controller=empleado');
    }
    public function edit()
    {
        if(isset($_REQUEST)){
            $id = $_REQUEST['ID_EMPLEADO'];
            $data=$this->model->getEmpleadoById($id);
            $estado= $this->estado->getAll();
            $cargo= $this->cargo->getAll();
            $contrato= $this->contrato->getAll();
            $departamento= $this->departamento->getAll();
            $obra= $this->obra->getAll();
            require 'views/layout.php';
            require 'views/Empleado/edit.php';
        }else{
            echo "Error, no se realizo.";
        }
    }
    public function add()
    {
        require 'views/layout.php';
        $estado= $this->estado->getAll();
        $cargo= $this->cargo->getAll();
        $contrato= $this->contrato->getAll();
        $departamento= $this->departamento->getAll();
        $obra= $this->obra->getAll();
        require 'views/empleado/new.php';
    }
    public function update()
    {
        if(isset($_POST)){
            $this->model->editEmpleado($_POST);
            header('Location: ?controller=empleado');
        }else{
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->deleteEmpleado($_REQUEST);
        header('Location: ?controller=empleado');
    }
    public function updateEstado()
    {
        $empleado = $this->model->getEmpleadoById($_REQUEST['ID_ESTADO']);
        $data = [];

        if($empleado[0]->ESTADO_ID== 1) { 
            $data = [
                'ID_EMPLEADO' => $empleado[0]->ID_EMPLEADO,
                'ESTADO_ID' => 2
            ];
        } elseif($empleado[0]->ESTADO_ID == 2) {
            $data = [
                'ID_EMPLEADO' => $empleado[0]->ID_EMPLEADO,
                'ESTADO_ID' => 1
            ];
        }

        $this->model->editEstado($data);
        header('Location: ?controller=empleado');

    }


    }