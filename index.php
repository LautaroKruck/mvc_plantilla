<?php

    /*
    El archivo más importante en un proyecto MVC es el index.php. Todas las peticiones URL que realice el usuario pasarán por este fichero. 
    Toda acción que se ejecute en nuestra aplicación tendrá que llamar al index y este tendrá que cargar el controlador asociado a dicha acción, 
    el modelo y la vista si procede.

    Responsabilidad principal: Es el punto de entrada de la aplicación.
    Detalles:
    - Se encarga de inicializar el entorno de la aplicación, como configurar constantes, cargar librerías e incluir el archivo de 
    autoloading si se utiliza (por ejemplo, con Composer).
    - Maneja la lógica de enrutar las solicitudes al controlador correspondiente.
    - Es minimalista y delega todas las responsabilidades importantes a las capas lógicas del patrón MVC.
    */

    // Carga los controladores que necesita

    // Necesitamos capturar la peticion

    /*
    localhost/mvc_plantilla/landing
        localhost/mvc_plantilla/login
    localhost/mvc_plantilla/register
    localhost/mvc_plantilla/loquesea
    */
    
    $requestUri = $_SERVER["REQUEST_URI"] ?? "";

    // Como ya sabemosa que URI quiere acceder el clienta, podenis cargar el COntroller Asociado
    switch ($requestUri) {
        case "/xampp_php/mvc_plantilla/landing":
            // Cargamos landingController.php
            require_once './controllers/LandingController.php';
            // INSTANCIAR EL CONTROLLER LANDING
            $landingController = new LandingController();
            // LLAMAR AL MÉTODO DE LANDING CONTROLLER RESPONSABLE DE CARGAR LA PAGINA
            $landingController->cargarVistaLanding();
            // LLAMAR AL MÉTODO DE LAM¡NDING CONTROLLER RESPONSABLE DE CARGAR LA PAGINA
            break;

        case "/xampp_php/mvc_plantilla/citas/allCitas":
            // Cargamos landingController.php
            require_once './controllers/CitaController.php';
            // INSTANCIAR EL CONTROLLER LANDING
            $citaController = new CitaController();
            // LLAMAR AL MÉTODO DE LANDING CONTROLLER RESPONSABLE DE CARGAR LA PAGINA
            $citaController->cargarListAllCitas();
            break;

        case "/xampp_php/mvc_plantilla/citas?tatuador=pepe":
            // Cargamos landingController.php
            require_once './controllers/CitaController.php';

            $tatuador = $_GET['tatuador'];

            $citaController = new CitaController();
            $citaController->cargarCitasTatuador($tatuador);
            break;

        default:
            // CARGAR EL CONTROLLER ASOCIADO A MOSTRAR LA PAGINA 404
            require_once './controllers/404Controller.php';

            $NotFController = new NotFController();

            $NotFController->cargarVistaLanding();

            break;
        
            
    }
    

?>