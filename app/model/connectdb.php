<?php
    class DatabaseModel {
        private $dbhost = DB_HOST;
        private $dbname = DB_NAME;
        private $dbuser = DB_USER;
        private $dbpass = DB_PASS;
        private $conn;
        private $stmt;

        function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbuser, $this->dbpass);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // echo "Connected successfully";
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                
        }

        function prepare($sql) {
            return $this->conn->prepare($sql);
        }

        function get_all($sql) {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute();
            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $this->stmt->fetchAll();
        }

    }

?>