<?php
require 'models/Tiponovedad.php';
require 'models/Estado.php';
class TipoNovedadController
{
    private $model;
    private $estado;

    public function __construct()
    {
        $this->model = new TipoNovedad;
        $this->estado = new Estado;
    }
    public function index()
    {
        require 'views/layout.php';
        $tiponovedades = $this->model->getAll();
        require 'views/tiponovedades/list.php';
    }
    public function newTipoNovedad()
    {
        require 'views/layout.php';
        require 'views/tiponovedades/new.php';
    }
    public function save()
    {
        $this->model->newTipoNovedad($_REQUEST);
        header('Location: ?controller=tiponovedad');
    }
    public function edit()
    {
        if (isset($_REQUEST['ID_TIPONOVEDAD'])) {
            $id = $_REQUEST['ID_TIPONOVEDAD'];
            $data = $this->model->getTipoNovedadById($id);
            $estado = $this->estado->getAll();
            require 'views/layout.php';
            require 'views/tiponovedades/edit.php';
        } else {
            echo "Error no existe el tiponovedad a editar";
        }
    }
    public function add()
    {
        require 'views/layout.php';
        require 'views/tiponovedades/new.php';
    }
    public function update()
    {
        if (isset($_POST)) {
            $this->model->editTipoNovedad($_POST);
            header('Location: ?controller=tiponovedad');
        } else {
            echo "Error Actualizando el tipo de novedad";
        }
    }

    public function delete()
    {
        $this->model->deleteTipoNovedad($_REQUEST);
        header('Location: ?controller=tiponovedad');
    }
    public function updateEstado()
        {
            $tiponovedad = $this->model->getTipoNovedadById($_REQUEST['ID_ESTADO']);
            $data = [];
    
            if($tiponovedad[0]->ESTADO_ID== 1) { 
                $data = [
                    'ID_TIPONOVEDAD' => $tiponovedad[0]->ID_TIPONOVEDAD,
                    'ESTADO_ID' => 2
                ];
            } elseif($tiponovedad[0]->ESTADO_ID == 2) {
                $data = [
                    'ID_TIPONOVEDAD' => $tiponovedad[0]->ID_TIPONOVEDAD,
                    'ESTADO_ID' => 1
                ];
            }
    
            $this->model->editEstado($data);
            header('Location: ?controller=tiponovedad');
    
        }
}
