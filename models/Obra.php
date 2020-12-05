<?php

/**
 * Modelo de la tabla users
 */
class Obra
{

	private $ID_OBRA;
	private $NOMBRE_OBRA;
	private $REPRESENTANTE;
	private $DIRECCION_OBRA;
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
		try {
			$strSql = "SELECT  o.*,e.ESTADO FROM Obra as  o INNER JOIN estado as e on e. ID_ESTADO = o.ESTADO_ID  ";

			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newObra($data)
	{
		try {
			$data['ESTADO_ID'] = 1;
			$this->pdo->insert('obra', $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getObraById($id)
	{
		try {
			$strSql = "SELECT * FROM obra WHERE ID_OBRA = :ID_OBRA";
			$array = ['ID_OBRA' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$strSql = 'SELECT * FROM obra WHERE ID_OBRA = :ID_OBRA';
			$array = ['ID_OBRA' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


	public function editObra($data)
	{
		try {
			$strWhere = 'ID_OBRA =' . $data['ID_OBRA'];
			$this->pdo->update('obra', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteObra($data)
	{
		try {
			$strWhere = 'ID_OBRA= ' . $data['ID_OBRA'];
			$this->pdo->delete('obra', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function editEstado($data)
	{
		try {
			$strWhere = 'ID_OBRA=' . $data['ID_OBRA'];
			$this->pdo->update('obra', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
