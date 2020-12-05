<?php
     class TipoNovedad
     {
 
         private $ID_TIPONOVEDAD;
         private $NOMBRE_TN;
         private $DESCRIPCION;
         private $ESTADO_ID;
         private $PORCENTAJE;
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
                 $strSql = "SELECT tn.ID_TIPONOVEDAD,tn.NOMBRE_TN,tn.DESCRIPCION,tn.PORCENTAJE,tn.ESTADO_ID, e.ESTADO FROM tipo_novedad as tn INNER JOIN estado as e  ON e.ID_ESTADO = tn.ESTADO_ID";
                 $query = $this->pdo->select($strSql);
                 return $query;
             } catch(PDOException $e) {
                 die($e->getMessage());
             }
         }
 
         public function newTipoNovedad($data)
         {
             try {
                 $data['ESTADO_ID'] = 1;
                 $this->pdo->insert('tipo_novedad', $data);
             } catch(PDOException $e) {
                 die($e->getMessage());
             }
             
         }
 
 
         public function getTipoNovedadById($id)
         {
             try {
                 $strSql = 'SELECT * FROM tipo_novedad WHERE ID_TIPONOVEDAD = :ID_TIPONOVEDAD';
                 $array = ['ID_TIPONOVEDAD' => $id];
                 $query = $this->pdo->select($strSql, $array);
                 return $query;
             } catch(PDOException $e) {
                 die($e->getMessage());
             }
         }
 
         public function editTipoNovedad($data)
         {
             try {
                 $strWhere = 'ID_TIPONOVEDAD = '. $data['ID_TIPONOVEDAD'];
                 $this->pdo->update('tipo_novedad', $data, $strWhere);
             } catch(PDOException $e) {
                 die($e->getMessage());
             }
         }
         public function deleteTipoNovedad($data)
         {
             try {
                 $strWhere = 'ID_TIPONOVEDAD= '. $data['ID_TIPONOVEDAD'];
                 $this->pdo->delete('tipo_novedad', $strWhere);
             } catch(PDOException $e) {
                 die($e->getMessage());
             }
         }
 
         public function editEstado($data)
         {
             try{
                 $strWhere='ID_TIPONOVEDAD= '. $data['ID_TIPONOVEDAD'];
                 $this->pdo->update('tipo_novedad',$data,$strWhere);
             }catch(PDOException $e){
                 die($e->getMessage());
             }
         }
 
 
     }
?>