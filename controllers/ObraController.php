<?php

require 'models/Obra.php';
require 'models/Estado.php';


class ObraController
{
	private $model;
	private $estado;
	public function __construct()
	{
		$this->model = new Obra;
		$this->estado = new Estado;		
	}

	public function index()
	{
		require 'views/layout.php';
		$obras = $this->model->getAll();
		require 'views/obras/list.php';
	}

	public function add()
	{
		require 'views/layout.php';
		require 'views/obras/new.php';
	}

	public function save()
	{
		$this->model->newObra($_REQUEST);
		header('Location: ?controller=obra');
	}

	public function edit()
	{
		if(isset($_REQUEST['ID_OBRA'])){
			$id = $_REQUEST['ID_OBRA'];
			$data = $this->model->getObraById($id);
			$estado= $this->estado->getAll();
			require 'views/layout.php';
			require 'views/obras/edit.php';
		} else {
			echo "Error no existe usuario a editar";
		}
	}

	public function update()
	{
		if (isset($_POST)) {
			$this->model->editObra($_POST);
			header('Location: ?controller=obra');
		} else {
			echo "Error Actulizando la obra";
		}
	}

	public function delete()
	{
		$this->model->deleteObra($_REQUEST);
		header('Location: ?controller=obra');
	}
	//añadido
	public function updateEstado()
	{
		$obra = $this->model->getObraById($_REQUEST['ID_ESTADO']);
		$data = [];

		if ($obra[0]->ESTADO_ID == 1) {
			$data = [
				'ID_OBRA' =>  $obra[0]->ID_OBRA,
				'ESTADO_ID ' => 2
			];
		} elseif ($obra[0]->ESTADO_ID == 2) {
			$data = [
				'ID_OBRA' =>  $obra[0]->ID_OBRA,
				'ESTADO_ID ' => 1
			];
		}

		$this->model->editEstado($data);
		header('Location: ?controller=obra');
	}
}
