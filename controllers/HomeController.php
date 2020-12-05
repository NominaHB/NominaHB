<?php
require 'models/Empleado.php';
require 'models/Novedad.php';
require 'models/Tiponovedad.php';
class HomeController
{
	private $modelNovedad;
	public function __construct()
    {
        $this->modelNovedad = new Novedad;
    }
	public function index()
	{
		if (isset($_SESSION['usuario'])) {
			$novedades = $this->modelNovedad->getNovedadAll();
			require 'views/layout.php';
			require 'views/home.php';
		} else {
			header('Location: ?controller=login');
		}
	}
}
