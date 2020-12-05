<?php

	/**
	 * Modelo de la tabla cargo
	 */
	class Rol
	{

		private $ID_ROL;		
		private $NOMBRE;	
		private $ESTADO_ROL;		
		private $pdo;

		public function __construct()
		{
			try {
				$this->pdo = new Database;
			} catch(PDOException $e){
				die($e->getMessage());
			}	
		}

		public function getAll()
		{
			try {                         /* consulta multi tabla*/
			$strSql = "SELECT r.*,e.ESTADO FROM Rol as r INNER JOIN ESTADO  as e on e.ID_ESTADO = r.ESTADO_ROL ORDER BY r.ID_ROL ASC";
				$query = $this->pdo->select($strSql);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function newRol($data)
		{
			try {
				$data['ESTADO_ROL'] = 1;
				$this->pdo->insert('rol', $data);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function getRolById($id)
		{
			try {
				$strSql = 'SELECT * FROM rol WHERE ID_ROL = :ID_ROL';
				$array = ['ID_ROL' => $id];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

				public function getById($id)
		{
			try {
				$strSql = 'SELECT * FROM rol WHERE ID_ROL = :ID_ROL';
				$array = ['ID_ROL' => $id];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function editRol($data)
		{
			try {
				$strWhere = 'ID_ROL = '. $data['ID_ROL'];
				$this->pdo->update('rol', $data, $strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function deleteRol($data)
		{
			try {
				$strWhere = 'ID_ROL = '. $data['ID_ROL'];
				$this->pdo->delete('rol',$strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		public function editEstado($data)
		{
			try{
				$strWhere='ID_ROL= '. $data['ID_ROL'];
				$this->pdo->update('rol',$data,$strWhere);
			}catch(PDOException $e){
				die($e->getMessage());
			}
		}

	}