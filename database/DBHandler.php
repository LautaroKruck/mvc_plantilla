<?php

    class DBHandler {
        private $connection;
        private $hostname;
        private $username;
        private $password;
        private $database;
        private $port;

        public function __construct($hostname, $username, $password, $database, $port) {
            $this->hostname = $hostname;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            $this->port = $port;
        }

        public function connect() {
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database, $this->port);
            
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
            return $this->connection;


        }

        // Método para desconectar de la base de datos
        public function disconnect()    {
            if ($this->connection) {
                $this->connection->close();
            }
        }
    }
?>