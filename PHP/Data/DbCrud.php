<?php

require_once "DbPdo.php";

class DbCrud {

    //Conexion db PDO``
    protected function _getDbh() {
        return DbPdo::getInstance()->getConn();
    }

    public function save($tabla, $datos, $where = null, $id = null) {

        $result = null;
        $iterator = new ArrayIterator($datos);
        if ($where == null) {

            $sql = "INSERT INTO `$tabla` (";

            while ($iterator->valid()) {
                $sql .= "`" . $iterator->key() . "`,";
                $iterator->next();
            }
            $sql = substr($sql, 0, -1);
            $sql .= ") VALUES (";


            foreach ($iterator as $param) {

                $sql .= "'" . $param . "',";
            }

            $sql = substr($sql, 0, -1);
            $sql .= ")";
           //echo $sql;
        } else {

            $sql = "UPDATE  `$tabla` SET ";

            while ($iterator->valid()) {
                $sql .= "`" . $iterator->key() . "` = '" . $iterator->current() . "',";
                $iterator->next();
            }

            $sql = substr($sql, 0, -1); // ELIMINA LA ULTIMA COMA  
            $sql .= " WHERE `$where` = $id";
          //echo $sql;
        }

        $result = $this->_getDbh()->exec($sql); // EJECUTA SQL

        if ($id == null) {

            return $result = $this->_getDbh()->lastInsertId();
        } else {

            return $result;
        }
    }

    public function delete($tabla, $where, $id) {

        $result = null;
        $sql = "DELETE FROM `$tabla` WHERE `$where` = ?";
        $stm = $this->_getDbh()->prepare($sql);
        $stm->bindParam(1, $id, PDO::PARAM_INT);
        $result = $stm->execute();

        return $result;
    }

    public function select($tabla, $datos = null, $nombre = null, $contar= null, $desde=null, $hasta=null, $id=null, $id_usuario=null, $ult = null, $asc = null, $desc = null, $nomb = null, $contarNombre = null) {

        $found = new ArrayObject();
        $result = null;
        if ($datos == null && $nombre == null && $contar == null && $desde == null && $hasta == null && $id == null && $id_usuario == null && $ult == null && $asc == null && $desc == null && $nomb == null && $contarNombre == null)  {
            $sql = "SELECT  * FROM $tabla ORDER BY id DESC";
        }
        if($nombre != null) {
            $sql = "SELECT ";
            foreach ($datos as $value) {

                $sql .= "`$value`,";
            }

            $sql = substr($sql, 0, -1);
            
            
            $sql .= "FROM `$tabla`";
            if ($nombre != null) {

                $sql .= " WHERE nombre = $nombre";
            }

           
        }if($contar != null){ // contar número de registros 

            $sql = "SELECT count(*) as $contar from $tabla";


        }
        if($desde != null && $hasta != null) {//paginacion 
            
            $sql = "SELECT * from $tabla  ORDER BY id DESC limit $desde, $hasta";

        }
        if($id != null){

            $sql = "SELECT * from $tabla  WHERE id = $id";


        }
        if($id_usuario != null){

            $sql = "SELECT * from $tabla  WHERE id_usuario = $id_usuario";


        }
        if($ult != null){

            $sql = "SELECT * from $tabla  WHERE id_usuario = $ult ORDER BY id DESC limit 1";


        }
        if($desde != null && $hasta != null && $asc != null ) {//paginacion 
            
            $sql = "SELECT * from $tabla  ORDER BY nombre ASC limit $desde, $hasta";

        }
        if($desde != null && $hasta != null && $desc != null ) {//paginacion 
            
            $sql = "SELECT * from $tabla  ORDER BY nombre DESC limit $desde, $hasta";

        }
        if($desde != null && $hasta != null && $nomb != null ) {//paginacion 
            
            $sql = "SELECT * from $tabla where nombre = \"$nomb\" ORDER BY nombre DESC limit $desde, $hasta";

        }
        if($contarNombre != null){ // contar número de registros 

            $sql = "SELECT count(*) as $contar from $tabla where nombre = $contarNombre ";


        }
        //echo $sql;
        $stm = $this->_getDbh()->query($sql);
        while ($rows = $stm->fetch(PDO::FETCH_ASSOC)) {


         $found->append($rows);
        }

        return $found;
    }
}

?>