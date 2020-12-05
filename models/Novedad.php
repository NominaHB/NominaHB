<?php

/**
 * Modelo de la tabla Novedad*/
class Novedad
{

	private $ID_NOVEDAD;
	private $ID_USUARIOS_FK;
	private $TIPO_NOVEDAD_FK;
	private $EMPLEADOFK;
	private $FECHA_INICIO;
	private $FECHA_FIN;
	private $VALOR;
	private $ESTADO_ID;
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new Database;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAll()
	{
		try {                         /* consulta multi tabla*/
			$strSql = "SELECT n.ID_NOVEDAD
			,u.USUARIO
			,tn.NOMBRE_TN
			,n.EMPLEADOFK
			,n.FECHA_INICIO
			,n.FECHA_FIN
			,n.VALOR
			,e.ESTADO
			,n.ESTADO_ID
			,em.NOMBRES
			,em.APELLIDOS
		FROM NOVEDAD AS n
		INNER JOIN ESTADO AS e ON n.ESTADO_ID = e.ID_ESTADO
		INNER JOIN USUARIOS AS u ON u.ID_USUARIO = n.ID_USUARIOS_FK
		INNER JOIN TIPO_NOVEDAD AS tn ON tn.ID_TIPONOVEDAD = n.TIPO_NOVEDAD_fk
		INNER JOIN EMPLEADO AS em ON em.ID_EMPLEADO = n.EMPLEADOFK;";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newNovedad($data)
	{
		try {
			$data['ESTADO_ID'] = 1;
			$this->pdo->insert('novedad', $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getNovedadById($id)
	{
		try {
			$strSql = 'SELECT * FROM novedad WHERE ID_NOVEDAD = :ID_NOVEDAD';
			$array = ['ID_NOVEDAD' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getNovedadByEmpleado($id)
	{
		try {
			$strSql = 'SELECT n.empleadofk
			,n.fecha_inicio
			,n.fecha_fin
			,n.valor
			,tn.nombre_tn
			,e.nombres
			,e.apellidos
			,e.salario
			,tn.porcentaje
		FROM novedad AS n
		INNER JOIN tipo_novedad AS tn ON n.tipo_novedad_fk = tn.id_tiponovedad
		INNER JOIN empleado AS e ON e.id_empleado = n.empleadofk
		WHERE e.id_empleado = :ID_EMPLEADO';
			$array = ['ID_EMPLEADO' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getNovedadAll()
	{
		try {                         /* consulta multi tabla*/
			$strSql = "SELECT e.ID_EMPLEADO
			,e.NOMBRES
			,e.APELLIDOS
			,e.SALARIO
			,c.NOMBRE_CARGO
			,IF( tp.PORCENTAJE IS NULL,0,(e.SALARIO * tp.PORCENTAJE)) AS Salud
			,IF(tp1.PORCENTAJE IS NULL,0,(e.SALARIO * tp1.PORCENTAJE)) AS Pension
			,IF(nHE.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHE.PORCENTAJE) * SUM(nHE.VALOR)),0) AS HoraExtra
			,IF(nHD.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHD.PORCENTAJE) * SUM(nHD.VALOR)),0) AS HoraDominical
			,IF(nV.VALOR IS NOT NULL,(((e.SALARIO / 240) * 8) * SUM(nV.VALOR)),0) AS Vacaciones
			,(e.SALARIO + IF(nHE.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHE.PORCENTAJE) * SUM(nHE.VALOR)),0) + IF(nHD.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHD.PORCENTAJE) * SUM(nHD.VALOR)),0)
			+ IF(nV.VALOR IS NOT NULL,(((e.SALARIO / 240) * 8) * SUM(nV.VALOR)),0)) AS TotalDevengado
			,(IF( tp.PORCENTAJE IS  NULL,0,(e.SALARIO * tp.PORCENTAJE)) + IF(tp1.PORCENTAJE IS  NULL,0,(e.SALARIO * tp1.PORCENTAJE))) AS TotalDeducido
			,((e.SALARIO + IF(nHE.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHE.PORCENTAJE) * SUM(nHE.VALOR)),0) + IF(nHD.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHD.PORCENTAJE) * SUM(nHD.VALOR)),0)
			+ IF(nV.VALOR IS NOT NULL,(((e.SALARIO / 240) * 8) * SUM(nV.VALOR)),0)) - (IF( tp.PORCENTAJE IS  NULL,0,(e.SALARIO * tp.PORCENTAJE)) + IF(tp1.PORCENTAJE IS  NULL,0,(e.SALARIO * tp1.PORCENTAJE)))) AS TotalAPagar
		FROM empleado AS e
		LEFT JOIN tipo_novedad as tpHE ON tpHE.nombre_tn = 'Hora Extra'
		LEFT JOIN novedad AS nHE ON  nHE.empleadofk = e.id_empleado  AND nHE.tipo_novedad_fk=tpHE.id_tiponovedad
		LEFT JOIN tipo_novedad as tpHD ON tpHD.nombre_tn = 'Hora Dominical'
		LEFT JOIN novedad AS nHD ON nHD.empleadofk = e.id_empleado  AND nHD.tipo_novedad_fk=tpHD.id_tiponovedad
		LEFT JOIN novedad AS nV ON nV.empleadofk = e.id_empleado  AND nV.tipo_novedad_fk=(select id_tiponovedad from tipo_novedad where nombre_tn = 'Vacaciones')
		LEFT JOIN tipo_novedad AS tp ON tp.nombre_tn = 'Salud'
		LEFT JOIN tipo_novedad AS tp1 ON tp1.nombre_tn = 'Pension'
		INNER JOIN cargo as c ON c.id_cargo=e.id_cargo_fk
		GROUP BY e.id_empleado
		
		
		
		";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}



	public function getById($id)
	{
		try {
			$strSql = 'SELECT * FROM novedad WHERE ID_NOVEDAD = :ID_NOVEDAD';
			$array = ['ID_NOVEDAD' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editNovedad($data)
	{
		try {
			$strWhere = 'ID_NOVEDAD = ' . $data['ID_NOVEDAD'];
			$this->pdo->update('novedad', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteNovedad($data)
	{
		try {
			$strWhere = 'ID_NOVEDAD = ' . $data['ID_NOVEDAD'];
			$this->pdo->delete('novedad', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function editEstado($data)
	{
		try {
			$strWhere = 'ID_NOVEDAD=' . $data['ID_NOVEDAD'];
			$this->pdo->update('novedad', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}