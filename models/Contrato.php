<?php

	/**
	 * Modelo de la tabla cargo
	 */
	class Contrato
	{

		private $ID_CONTRATO;		
		private $TIPO_CONTRATO;
		private $DESCRIPCION;
		private $ESTADO_ID;			
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
			$strSql = "SELECT c.*,e.ESTADO  FROM Contrato c INNER JOIN ESTADO e on e.ID_ESTADO = c.ESTADO_ID ORDER BY c.ID_CONTRATO ASC";
				$query = $this->pdo->select($strSql);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function newContrato($data)
		{
			try {
				$data['ESTADO_ID'] = 1;
				$this->pdo->insert('Contrato', $data);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function getContratoById($id)
		{
			try {
				$strSql = 'SELECT * FROM Contrato WHERE ID_CONTRATO = :ID_CONTRATO';
				$array = ['ID_CONTRATO' => $id];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

				public function getById($id)
		{
			try {
				$strSql = 'SELECT * FROM Contrato WHERE ID_CONTRATO = :ID_CONTRATO';
				$array = ['ID_CONTRATO' => $id];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function editContrato($data)
		{
			try {
				$strWhere = 'ID_CONTRATO = '. $data['ID_CONTRATO'];
				$this->pdo->update('Contrato', $data, $strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function deleteContrato($data)
		{
			try {
				$strWhere = 'ID_CONTRATO = '. $data['ID_CONTRATO'];
				$this->pdo->delete('Contrato',$strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		public function editEstado($data)
    {
        try {
            $strWhere = 'ID_CONTRATO='. $data['ID_CONTRATO'];
            $this->pdo->update('Contrato', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

	}