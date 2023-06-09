<?php 

namespace Controllers;
use MVC\Router;
use Model\Propiedad;

class PropiedadController {
    public static function index(Router $router) {

        $propiedades =  Propiedad::all();

        $resultado = null;

        $router->render('propiedades/admin', [
            'propiedades' => $propiedades,
            'resultado' => $resultado
        ]);
    }

    public static function crear() {
        echo "Crear propiedad";
    }

    public static function actualizar() {
        echo "Actualizar propiedad";
    }
}