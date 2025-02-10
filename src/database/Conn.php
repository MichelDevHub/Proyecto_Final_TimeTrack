<?php
namespace migue\proyectoFinalTimetrack\Database;

use migue\proyectoFinalTimetrack\Config\DatabaseParameters;

class Conn{
    public static function connect() {
        try {
            $conn = new \PDO('mysql:host=' . DatabaseParameters::$DB_HOST . ';port=' . DatabaseParameters::$DB_PORT . ';dbname=' . DatabaseParameters::$DB_NAME . ';charset=' . DatabaseParameters::$DB_CHARSET, DatabaseParameters::$DB_USER, DatabaseParameters::$DB_PASSWORD);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}

?>