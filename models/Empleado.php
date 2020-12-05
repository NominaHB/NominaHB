<?php

	/**
	 * Modelo de la tabla users
	 */
	class Empleado
	{

		private $ID_EMPLEADO;		
		private $NOMBRES;		
		private $APELLIDOS;	
        private $FECHA_INGRESO;
		private $DIRECCION;	
        private $TELEFONO;
        private $SALARIO;
        private $ID_CARGO_FK;
        private $ID_OBRA_FK;
        private $ID_CONTRATO_FK;
        private $ID_DEPARTAMENTO_FK;
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
			try {                         
			$strSql = "SELECT em.ID_EMPLEADO
			,em.NOMBRES
			,em.APELLIDOS
			,em.FECHA_INGRESO
			,em.DIRECCION
			,em.TELEFONO
			,em.SALARIO
			,c.NOMBRE_CARGO
			,o.NOMBRE_OBRA
			,cn.TIPO_CONTRATO
			,d.NOMBRE_DPTO
			,e.ESTADO
			,e.ID_ESTADO
		FROM Empleado em
		INNER JOIN ESTADO e ON e.ID_ESTADO = em.ESTADO_ID
		INNER JOIN cargo c ON c.ID_CARGO = em.ID_CARGO_FK
		INNER JOIN obra o ON o.ID_OBRA = em.ID_CARGO_FK
		INNER JOIN contrato cn ON cn.ID_CONTRATO = em.ID_CONTRATO_FK
		INNER JOIN departamento d ON d.ID_DPTO = em.ID_DEPARTAMENTO_FK";
				$query = $this->pdo->select($strSql);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function newEmpleado($data)
		{
			try {
				$data['ESTADO_ID'] = 1;
				$this->pdo->insert('empleado', $data);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function getEmpleadoById($id)
		{
			try {
				$strSql = "SELECT * FROM empleado WHERE ID_EMPLEADO = :ID_EMPLEADO";
				$array = ['ID_EMPLEADO' => $id];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		

		public function getById($id)
		{
			try {
				$strSql = "SELECT * FROM empleado WHERE ID_EMPLEADO = :ID_EMPLEADO";
				$array = ['ID_EMPLEADO' => $id];
				$query = $this->pdo->select($strSql, $array);
				return $query;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		
		public function editEmpleado($data)
    {
        try {
            $strWhere = 'ID_EMPLEADO ='. $data['ID_EMPLEADO'];
            $this->pdo->update('empleado', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

public function editEstado($data)
    {
        try {
            $strWhere = 'ID_EMPLEADO='. $data['ID_EMPLEADO'];
            $this->pdo->update('empleado', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

		public function deleteEmpleado($data)
		{
			try {
				$strWhere = 'ID_EMPLEADO = '. $data['ID_EMPLEADO'];
				$this->pdo->delete('empleado',$strWhere);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

	}