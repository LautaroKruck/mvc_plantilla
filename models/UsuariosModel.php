<?php

require_once './database/DBHandler.php';

class UsuarioModel {
    private $dbHandler;
    private $connection;
    private $tabla = "usuarios";

    public function __construct() {
        $this->dbHandler = new DBHandler("localhost", "root", "", "tattos_bd", "3306");
    }

    public function getUsuario($idUsuario) {
        $this->connection = $this->dbHandler->connect();

        $sql = "SELECT * FROM $this->tabla WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $idUsuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        $usuarios = [];
        while ($row = $resultado->fetch_assoc()) {
            $usuarios[] = $row;
        }

        return $usuarios; // Retornar los usuarios encontrados
    }

    public function login($email, $password) {
        $this->connection = $this->dbHandler->connect();

        $sql = "SELECT * FROM $this->tabla WHERE email = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows == 0) {
            echo "Email o contraseña incorrectos";
            return false;
        }

        $usuario = $resultado->fetch_assoc();

        if (password_verify($password, $usuario["password"])) {
            echo "Bienvenid@, " . htmlspecialchars($email);
            return true;
        } else {
            echo "Email o contraseña incorrectos";
            return false;
        }
    }

    public function insertUsuario($email, $password) {
        $this->connection = $this->dbHandler->connect();
        $sql = "INSERT INTO $this->tabla (email, password) VALUES (?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        return $stmt->execute(); // Retornar true/false según el resultado
    }
}

?>