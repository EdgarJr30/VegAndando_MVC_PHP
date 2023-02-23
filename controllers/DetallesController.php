<?php

namespace Controllers;

use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Detalles;
use Model\Frase;
use Model\HorariosDeSalida;
use Model\LugaresVisitar;
use Model\Viaje;
use Model\ViajeIncluye;

class DetallesController {
    public static function index(Router $router) {
        if (!is_admin()) {
            header('Location: /login');
        }

        $detalles = Detalles::all();
        
        foreach ($detalles as $detalle) {
            $detalle->lugaresavisitar = LugaresVisitar::find($detalle->lugaresavisitar_id);
            $detalle->elviajeincluye = ViajeIncluye::find($detalle->elviajeincluye_id);
            $detalle->horariosdesalida = HorariosDeSalida::find($detalle->horariosdesalida_id);
            $detalle->frase = Frase::find($detalle->frase_id);
        }

        // debuguear($detalles);

        $router->render('admin/detalles/index', [
            'titulo' => 'Detalles Del Viaje',
            'detalles' => $detalles
        ]);
    }

    public static function crear(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];

        $lugaresVisitar = LugaresVisitar::all('ASC');
        $viajeIncluye = ViajeIncluye::all('ASC');
        $horariosDeSalida = HorariosDeSalida::all('ASC');
        $frase = Frase::all('ASC');

        debuguear($lugaresVisitar);

        $detalle = new Detalles;

        // foreach ($detalles as $detalle) {
        //     $detalle->lugaresavisitar = LugaresVisitar::find($detalle->lugaresavisitar_id);
        //     $detalle->elviajeincluye = ViajeIncluye::find($detalle->elviajeincluye_id);
        //     $detalle->horariosdesalida = HorariosDeSalida::find($detalle->horariosdesalida_id);
        //     $detalle->frase = Frase::find($detalle->frase_id);
        // }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!is_admin()) {
                header('Location: /login');
            }

            $detalle->sincronizar($_POST);

            //Validar
            $alertas = $detalle->validar();

            //Guardar el Registro
            if (empty($alertas)) {
                // Guardar en la BD
                $resultado = $detalle->guardar();

                if ($resultado) {
                    header('Location: /admin/detalles');
                }
            }
        }

        $router->render('admin/detalles/crear', [
            'titulo' => 'Registrar Detalles',
            'alertas' => $alertas,
            'lugaresVisitar' => $lugaresVisitar,
            'viajeIncluye' => $viajeIncluye,
            'horariosDeSalida' => $horariosDeSalida,
            'frase' => $frase,
            'detalle' => $detalle
        ]);
    }
}
