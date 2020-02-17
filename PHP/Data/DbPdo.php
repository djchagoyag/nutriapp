<?php

class DbPdo {

    private $_dbh;
    private $_username = "jacqueline";
    private $_passwd = "jacqueline";
    private $_dns = "mysql:host=proyectoo.c3tbrb3bac5x.us-east-1.rds.amazonaws.com;dbname=proyectoo";
    private static $_instance = null;

    public static function getInstance() {
        if (!(self::$_instance instanceof DbPdo)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        try {
            $this->_dbh = new PDO($this->_dns, $this->_username, $this->_passwd);
            $this->_dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            echo "Error al conectar DB!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getConn() {
        if ($this->_dbh === null) {
            self::getInstance();
        }

        return $this->_dbh;
    }

    public function isConn() {
        return ((bool) ($this->_dbh instanceof PDO));
    }

    public function closeConn() {
        $this->_dbh = null;
    }

    public function __destruct() {
        $this->closeConn();
    }

}

?>