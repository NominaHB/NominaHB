<?php
require 'models/Tiponovedad.php';
require 'models/Empleado.php';
require 'models/Novedad.php';

class DesprendibleController
{
    private $modelTiponovedad;
    private $modelEmpleado;
    private $modelNovedad;
    public function __construct()
    {
        $this->modelTiponovedad = new TipoNovedad;
        $this->modelEmpleado = new Empleado;
        $this->modelNovedad = new Novedad;
    }
    public function index()
    {
        $UsuarioId = $_SESSION['usuario']->USUARIO;
        $dataempleado = $this->modelEmpleado->getEmpleadoById($UsuarioId);
        $datacargo = $this->modelEmpleado->getAll();
        $datanovedad = $this->modelNovedad->getNovedadByEmpleado($UsuarioId);
        $valorTotalNovedad = 0;
        $salarioBasico = $dataempleado[0]->SALARIO;
        $resultadoTotal = 0;
        for ($i = 0; $i < count($datanovedad); $i++) {
            //Hora Extra Dominical
            if ($datanovedad[$i]->nombre_tn == 'Hora Dominical' || $datanovedad[$i]->nombre_tn == 'Hora Extra') {
                $valorHora = $datanovedad[$i]->salario / 240;
                $valorTotalNovedad += ($valorHora * $datanovedad[$i]->porcentaje) * $datanovedad[$i]->valor;
            }

            //Vacaciones
            if($datanovedad[$i]->nombre_tn == 'Vacaciones'){
                $valorHora = $datanovedad[$i]->salario / 240;
                $valorTotalNovedad += ($valorHora * 8) * $datanovedad[$i]->valor;
            }


            //

        }
        $resultadoTotal = $salarioBasico + $valorTotalNovedad;
        $datatiponovedad = $this->modelTiponovedad->getAll();
        for ($i = 0; $i < count($datatiponovedad); $i++) {
            //Hora Extra Dominical
            if ($datatiponovedad[$i]->NOMBRE_TN == 'Salud' || $datatiponovedad[$i]->NOMBRE_TN == 'Pension') {
                $resultadoTotal -= ($salarioBasico * $datatiponovedad[$i]->PORCENTAJE);
            }
        }

        require 'views/layout.php';
        require 'views/desprendible.php';
    }
   
}
