<?php
require 'models/Novedad.php';
require 'models/Estado.php';
require 'models/Tiponovedad.php';
require 'models/Usuario.php';
require 'models/Empleado.php';

class NovedadController
{
	private $model;
	private $estado;
	private $tiponovedad;
	private $usuario;
	private $empleado;

	public function __construct()
	{
		$this->model = new Novedad;
		$this->estado = new Estado;
		$this->tiponovedad = new TipoNovedad;
		$this->usuario = new Usuario;
		$this->empleado = new Empleado;
	}
	public function index()
	{
		require 'views/layout.php';
		$novedades = $this->model->getAll();
		require 'views/Novedad/list.php';
	}
	public function newTipoNovedad()
	{
		require 'views/layout.php';
		require 'views/Novedad/new.php';
	}

	public function add()
	{
		require 'views/layout.php';
		
			$usuario = $this->usuario->getAll();
			$empleado = $this->empleado->getAll();
			$tiponovedad = $this->tiponovedad->getAll();
		require 'views/novedad/new.php'; 
	}
	public function save()
	{
		$this->model->newNovedad($_REQUEST);
		header('Location: ?controller=novedad');
	}

	

	public function edit()
	{
		if (isset($_REQUEST)) {
			$id = $_REQUEST['ID_NOVEDAD'];
			$data = $this->model->getNovedadById($id);
			$estado = $this->estado->getAll();
			$usuario = $this->usuario->getAll();
			$empleado = $this->empleado->getAll();
			$tiponovedad = $this->tiponovedad->getAll();
			require 'views/layout.php';
			require 'views/Novedad/edit.php';
		} else {
			echo "Error no existe novedad a editar";
		}
	}

	public function update()
	{
		if (isset($_POST)) {
			$this->model->editNovedad($_POST);
			header('Location: ?controller=Novedad');
		} else {
			echo "Error Actulizando a la Novedad";
		}
	}

	public function delete()
	{
		$this->model->deleteNovedad($_REQUEST);
		header('Location: ?controller=novedad');
	}
	//añadido

	public function updateEstado()
	{
		$novedad = $this->model->getNovedadById($_REQUEST['ID_ESTADO']);
		$data = [];

		if ($novedad[0]->ESTADO_ID == 1) {
			$data = [
				'ID_NOVEDAD' => $novedad[0]->ID_NOVEDAD,
				'ESTADO_ID' => 2
			];
		} elseif ($novedad[0]->ESTADO_ID == 2) {
			$data = [
				'ID_NOVEDAD' => $novedad[0]->ID_NOVEDAD,
				'ESTADO_ID' => 1
			];
		}
		$this->model->editEstado($data);
		header('Location: ?controller=novedad');
	}
}