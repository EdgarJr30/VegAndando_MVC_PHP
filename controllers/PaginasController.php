<?php

namespace Controllers;

use MVC\Router;
use Model\Viaje;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    }

    public static function home(Router $router) {

        // Obtener todos los ponentes
        $viajes = Viaje::all();

        $router->render('paginas/home', [
            'titulo' => 'Inicio',
            'viajes' => $viajes
        ]);
    }

    public static function viaje(Router $router) {

        $id = validarORediceccionar('/viajes');

        //Buscar la propiedad por su id
        $viaje = Viaje::find($id);

        $router->render('paginas/viaje/index', [
            'titulo' => $viaje->titulo,
            'viaje' => $viaje
        ]);
    }

    public static function agendadeviajes(Router $router) {

        $viajes = Viaje::all();

        $router->render('paginas/agendadeviajes', [
            'titulo' => 'Agenda de Viajes',
            'viajes' => $viajes
        ]);
    }

    public static function pago(Router $router) {

        $id = validarORediceccionar('/viajes');

        //Buscar la propiedad por su id
        $viaje = Viaje::find($id);

        $router->render('paginas/viaje/pago', [
            'titulo' => $viaje->titulo,
            'viaje' => $viaje
        ]);
    }

    public static function about(Router $router) {

        $router->render('paginas/about', [
            'titulo' => 'About Us',
        ]);
    }

    public static function politicadepago(Router $router) {

        $router->render('paginas/politicadepago', [
            'titulo' => 'Política De Pago',
        ]);
    }

    public static function cookies(Router $router) {

        $router->render('paginas/cookies', [
            'titulo' => 'Política Sobre Cookies',
        ]);
    }

    public static function privacy(Router $router) {

        $router->render('paginas/privacy', [
            'titulo' => 'Política De Privacidad',
        ]);
    }

    public static function error(Router $router) {
        $router->render('paginas/error', [
            'titulo' => 'Pagina no encontrada'
        ]);
    }

    public static function haciendapark(Router $router) {

        $router->render('paginas/haciendapark', [
            'titulo' => 'Hacienda Park',
        ]);
    }
}
