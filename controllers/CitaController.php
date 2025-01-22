<?php
    require_once "./models/CitaModel.php";
    class CitaController {

        private $citaModel;

        public function __construct() {
            $this -> citaModel = new CitaModel("./database/citas.json");
        }

        public function cargarListAllCitas() {
            
            

            $citas = $this -> citaModel -> leerCitas();

            require_once "./views/ListaCitasView.php";
        }

        public function cargarCitasTatuador($tatuador) {
            $citas = $this -> citaModel -> leerCitas();
            $citasPorTatuador = array_filter($citas, function($cita) use ($tatuador) {
                return $cita['tatuador'] === $tatuador;
            });

            require_once "./views/ListaCitasView.php";
        }
    }

?>