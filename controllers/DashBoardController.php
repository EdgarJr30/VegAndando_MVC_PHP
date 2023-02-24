<?php

namespace Controllers;

use Model\ActvOpcional;
use Model\Viaje;
use MVC\Router;

class DashBoardController {
    public static function index(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administración'
        ]);
    }

    public static function indexActvOpcional(Router $router) {
        if (!is_admin()) {
            header('Location: /login');
        }

        $actvOpcionales = ActvOpcional::all();
        $viajes = Viaje::all();

        foreach ($actvOpcionales as $actvOpcional) {
            $actvOpcional->viajefrase = Viaje::find($actvOpcional->viaje_id);
        }

        $router->render('admin/actividad_opcional/index', [
            'titulo' => 'Crear Actividad Opcional',
            'actvOpcionales' => $actvOpcionales,
            'viajes' => $viajes
        ]);
    }

    public static function crearActvOpcional(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];
        $viajes = Viaje::all('DESC');
        $actvOpcional = new ActvOpcional;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!is_admin()) {
                header('Location: /login');
            }

            $actvOpcional->sincronizar($_POST);

            //Validar
            $alertas = $actvOpcional->validar();

            if (empty($alertas)) {

                // Guardar en la BD
                $resultado = $actvOpcional->guardar();

                if ($resultado) {
                    header('Location: /admin/actividad_opcional');
                }
            }
        }

        $router->render('admin/actividad_opcional/crear', [
            'titulo' => 'Registrar Actividad Opcional',
            'alertas' => $alertas,
            'viajes' => $viajes,
            'actvOpcional' => $actvOpcional
        ]);
    }

    public static function editarActvOpcional(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];
        $viajes = Viaje::all('DESC');
        $actvOpcional = new ActvOpcional;

        //Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /admin/actividad_opcional');
        }

        //Obtener actividad a Editar
        $actvOpcional = ActvOpcional::find($id);

        if (!$actvOpcional) {
            header('Location: /admin/actividad_opcional');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!is_admin()) {
                header('Location: /login');
            }

            $actvOpcional->sincronizar($_POST);

            //Validar
            $alertas = $actvOpcional->validar();

            if (empty($alertas)) {

                // Guardar en la BD
                $resultado = $actvOpcional->guardar();

                if ($resultado) {
                    header('Location: /admin/actividad_opcional');
                }
            }
        }

        $router->render('admin/actividad_opcional/editar', [
            'titulo' => 'Actualizar Actividad Opcional',
            'alertas' => $alertas,
            'viajes' => $viajes,
            'actvOpcional' => $actvOpcional
        ]);
    }

    public static function eliminarActvOpcional() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header('Location: /login');
            }
            $id = $_POST['id'];
            $actvOpcional = ActvOpcional::find($id);
            if (!isset($actvOpcional)) {
                header('Location: /admin/actividad_opcional');
            }
            $resultado = $actvOpcional->eliminar();
            if ($resultado) {
                header('Location: /admin/actividad_opcional');
            }
        }
    }
}
