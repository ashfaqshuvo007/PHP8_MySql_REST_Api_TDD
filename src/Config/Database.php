<?php

namespace Src\Config;

use \PDO;
use \PDOException;

class Database 
{
    /**
     * DB Connection using PDO
     */

    //Properties
    public $conn;
    private $database = "php8_api";
    private $host = "127.0.0.1";
    private $db_user = "api_user";
    private $password = "12345";
    private $charset = "utf8";
    
    //Get Connection 
    public function getConnection() {

        $dsn = "mysql:host=$this->host;dbname=$this->database";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            ];

        try {
            $this->conn = new PDO($dsn, $this->db_user, $this->password, $options);
            // return $this->conn;
            return "DB Connected";

        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());


        }

    }
}
