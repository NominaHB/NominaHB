<?php

/**
 * Modelo de la tabla cargo
 */
class Cargo
{

	private $ID_CARGO;
	private $NOMBRE_CARGO;
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
			$strSql = "SELECT c.*,e.ESTADO FROM cargo as  c INNER JOIN estado as  e on e.ID_ESTADO = c.ESTADO_ID ";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newCargo($data)
	{
		try {
			$data['ESTADO_ID'] = 1;
			$this->pdo->insert('cargo', $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getCargoById($id)
	{
		try {
			$strSql = 'SELECT * FROM Cargo WHERE ID_CARGO = :ID_CARGO';
			$array = ['ID_CARGO' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$strSql = 'SELECT * FROM cargo WHERE ID_CARGO = :ID_CARGO';
			$array = ['ID_CARGO' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editCargo($data)
	{
		try {
			$strWhere = 'ID_CARGO = ' . $data['ID_CARGO'];
			$this->pdo->update('cargo', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteCargo($data)
	{
		try {
			$strWhere = 'ID_CARGO = ' . $data['ID_CARGO'];
			$this->pdo->delete('cargo', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function editEstado($data)
	{
		try {
			$strWhere = 'ID_CARGO=' . $data['ID_CARGO'];
			$this->pdo->update('Cargo', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
