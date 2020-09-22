<?php
    class CrudDb {
        private $servername;
        private $database;
        private $username;
        private $password;

        public function __construct($servername, $database, $username, $password)
        {
            $this->servername= $servername;
            $this->database = $database;
            $this->username = $username;
            $this->password = $password;
        }

        public function dbConnect() {
            $sqlConf = "mysql:host=$this->servername;dbname=$this->database;";
            $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            try {
                return $my_Db_Connection = new PDO($sqlConf, $this->username, $this->password, $dsn_Options);
            } catch (PDOException $error) {
                echo 'Connection error: ' . $error->getMessage();
            }
        }
    }

    $objCrudDb = new CrudDb('localhost', 'crud', 'admin', 'admin123');
    $my_Db_Connection = $objCrudDb->dbConnect();
