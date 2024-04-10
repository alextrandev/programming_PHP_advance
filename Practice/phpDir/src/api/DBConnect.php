<?php

// Database connect using PDO

class DBConnect {
    private $server = 'db';
    private $dbname = 'fullstackapp';
    private $user = 'root';
    private $pass = 'lionPass';

    function connect() {
        try {
            // dsn data source name
            $dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->dbname;
            $conn = new PDO($dsn, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\Exception $e) {
            echo "Database Error: " . $e->getMessage();
        }
    }
}
