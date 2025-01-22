<?php
    class Cita {

        private $id;
        private $description;
        private $fechaCita;
        private $cliente;
        private $tatuador;
        

        public function __construct($id, $description, $fechaCita, $cliente, $tatuador) {
            $this->id = $id;
            $this->description = $description;
            $this->fechaCita = $fechaCita;
            $this->cliente = $cliente;
            $this->tatuador = $tatuador;
        }

        public function getId() {
            return $this->id;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getFechaCita() {
            return $this->fechaCita;
        }
        public function getCliente() {
            return $this->cliente;
        }
        public function getTatuador() {
            return $this->tatuador;
        }

        public function jsonSerialize(): array {
            return [
                'id' => $this->id,
                'descripcion' => $this->description,
                'fecha_cita' => $this->fechaCita,
                'cliente' => $this->cliente,
                'tatuador' => $this->tatuador
            ];
        }
    }   
?>