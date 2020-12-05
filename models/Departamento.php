<?php

/**
 * modelo de peliculas
 */
class Departamento
{
    private $ID_DPTO;
    private $NOMBRE_DPTO;
    private $DESCRIPCION_DPTO;
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
            $strSql = "SELECT  d.*,e. ESTADO  FROM Departamento d INNER JOIN ESTADO e on e. ID_ESTADO = d.ESTADO_ID ORDER BY d.ID_DPTO ASC ";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function newDepartamento($data)
    {
        try {
            $data['ESTADO_ID'] = 1;
            $this->pdo->insert('departamento', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getDepartamentoById($id)
    {
        try {
            $strSql = "SELECT * FROM departamento WHERE ID_DPTO=:ID_DPTO";
            $array = ['ID_DPTO' => $id];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strSql = 'SELECT * FROM departamento WHERE ID_DPTO = :ID_DPTO';
            $array = ['ID_DPTO' => $id];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editDepartamento($data)
    {
        try {
            $strWhere = 'ID_DPTO =' . $data['ID_DPTO'];
            $this->pdo->update('departamento', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function deleteDepartamento($data)
    {
        try {
            $strWhere = 'ID_DPTO =' . $data['ID_DPTO'];
            $this->pdo->delete('departamento', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editEstado($data)
    {
        try {
            $strWhere = 'ID_DPTO=' . $data['ID_DPTO'];
            $this->pdo->update('departamento', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>