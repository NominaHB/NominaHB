<?php


class Login
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function validateUser($data)
    {
        try {
            $strSql = "SELECT u.*, e.ESTADO, r.NOMBRE as rol FROM usuarios AS  u INNER JOIN estado AS e ON e.ID_ESTADO = u.ESTADO_ID INNER JOIN rol AS r ON r.ID_ROL = u.ID_ROL_FK WHERE u.USUARIO = '{$data['USUARIO']}' AND u.CONTRASENA = '{$data['CONTRASENA']}' AND u.ESTADO_ID = 1 ";
            
            $query = $this->pdo->select($strSql);

            if(isset($query[0]->ID_USUARIO)) {
                $_SESSION['usuario'] = $query[0];
                return true;
            } else
                return 'Error al Iniciar Sesión. Verifique sus Credenciales';
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    
}
