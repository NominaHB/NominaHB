<?php
require 'models/Departamento.php';
require 'models/Estado.php';

class DepartamentoController
{
    private $model;
    private $estados;

    public function __construct()
    {
        try {
            $this->estados = new Estado;
            $this->model = new Departamento;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function index()
    {
        require 'views/layout.php';
        $departamentos = $this->model->getAll();
        require 'views/departamentos/list.php';
    }
    public function new()
    {
        require 'views/layout.php';
        require 'views/departamentos/new.php';
    }
    public function save()
    {
        $this->model->newDepartamento($_REQUEST);
        header('Location: ?controller=departamento');
    }
    public function edit()
    {
        if (isset($_REQUEST)) {
            $id = $_REQUEST['ID_DPTO'];
            $data = $this->model->getDepartamentoById($id);
            $Estado = $this->estados->getAll();
            require 'views/layout.php';
            require 'views/departamentos/edit.php';
        } else {
            echo "Error, no se realizo.";
        }
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->editDepartamento($_POST);
            header('Location: ?controller=departamento');
        } else {
            echo "Error, no se realizo";
        }
    }
    public function delete()
    {
        $this->model->deleteDepartamento($_REQUEST);
        header('Location: ?controller=departamento');
    }
    public function updateEstado()
    {
        $departamento = $this->model->getDepartamentoById($_REQUEST['ID_ESTADO']);
        $data = [];

        if ($departamento[0]->ESTADO_ID == 1) {
            $data = [
                'ID_DPTO' =>  $departamento[0]->ID_DPTO,
                'ESTADO_ID' => 2
            ];
        } elseif ($departamento[0]->ESTADO_ID == 2) {
            $data = [
                'ID_DPTO' =>  $departamento[0]->ID_DPTO,
                'ESTADO_ID' => 1
            ];
        }

        $this->model->editEstado($data);
        header('Location: ?controller=departamento');
    }
}
