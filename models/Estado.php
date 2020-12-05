<?php

    class Estado
    {
        private $ID_ESTADO;
        private $ESTADO;
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
			try {
				$strSql = "SELECT * FROM estado";
				$query = $this->pdo->select($strSql);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		public function newEstado($data)
		{
			try {
				$this->pdo->insert('estado', $data);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
			
		}


		public function getEstadoById($ID_ESTADO)
		{
			try {
				$strSql = 'SELECT * FROM estado WHERE ID_ESTADO = :ID_ESTADO';
				$array = ['ID_ESTADO' => $ID_ESTADO];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function editEstado($data)
		{
			try {
				$strWhere = 'ID_ESTADO = '. $data['ID_ESTADO'];
				$this->pdo->update('estado', $data, $strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		public function deleteEstado($data)
		{
			try {
				$strWhere = 'ID_ESTADO = '. $data['ID_ESTADO'];
				$this->pdo->delete('estado', $strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

    }