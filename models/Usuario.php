<?php

class Usuario
{
	private $ID_USUARIO;
	private $ID_ROL_FK;
	private $USUARIO;
	private $CONTRASENA;
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
			$strSql = "SELECT u.ID_USUARIO,
			r.NOMBRE,
			u.ID_ROL_FK,
			u.USUARIO,
			u.CONTRASENA,
			e.ESTADO,
			u.ESTADO_ID,
			u.CORREO FROM usuarios as u 
			INNER JOIN estado as e on e.ID_ESTADO = u.ESTADO_ID 
			INNER JOIN rol as  r on r.ID_ROL=u.ID_ROL_FK;";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	public function getUsuariByEmpleado($id)
	{
		try {
			$strSql = 'SELECT u.USUARIO
			,u.CORREO
			,u.ID_ROL_FK
			,e.NOMBRES
			,e.APELLIDOS
			,r.NOMBRE
		FROM usuarios AS u
		INNER JOIN empleado AS e ON u.USUARIO = em.ID_EMPLEADO
		INNER JOIN rol AS r ON r.ID_ROL = u.ID_ROL_FK
		WHERE e.ID_EMPLEADO = :ID_EMPLEADO';
			$array = ['ID_EMPLEADO' => $id];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newUsuario($data)
	{
		try {
			$data['ESTADO_ID'] = 1;
			$data['ID_ROL_FK'] = (int)$data['ID_ROL_FK'];
			$data['USUARIO'] = (int)$data['USUARIO'];
			$this->pdo->insert('usuarios', $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


	public function getUsuarioById($ID_USUARIO)
	{
		try {
			$strSql = 'SELECT * FROM usuarios WHERE ID_USUARIO = :ID_USUARIO';
			$array = ['ID_USUARIO' => $ID_USUARIO];
			$query = $this->pdo->select($strSql, $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editUsuario($data)
	{
		try {
			$strWhere = 'ID_USUARIO = ' . $data['ID_USUARIO'];
			$this->pdo->update('usuarios', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function deleteUsuario($data)
	{
		try {
			$strWhere = 'ID_USUARIO = ' . $data['ID_USUARIO'];
			$this->pdo->delete('usuarios', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function editEstado($data)
	{
		try {
			$strWhere = 'ID_USUARIO=' . $data['ID_USUARIO'];
			$this->pdo->update('usuarios', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
