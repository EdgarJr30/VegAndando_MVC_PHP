<?php

namespace Controllers;

use MVC\Router;
use Model\Viaje;
use Intervention\Image\ImageManagerStatic as Image;
use Model\ActvOpcional;
use Model\Estatus;

class ViajesController {
    public static function index(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $viajes = Viaje::all();

        foreach ($viajes as $viaje) {
            $viaje->estatus = Estatus::find($viaje->estatus_id);
        }

        $router->render('admin/viajes/index', [
            'titulo' => 'Crea una nueva travesia',
            'viajes' => $viajes
        ]);
    }

    public static function crear(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];
        $estatus = Estatus::all('ASC');
        $actvOpcionales = ActvOpcional::all('ASC');
        $viaje = new Viaje;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!is_admin()) {
                header('Location: /login');
            }

            //Leer imagen
            if (!empty($_FILES['imagen']['tmp_name'])) {
                $carpeta_imagenes = '../public/img/viajes';

                //Crear la carpeta si no existe
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0755, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(350, 600)->encode('png', 100);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(350, 600)->encode('webp', 100);

                $nombre_imagen = md5(uniqid(rand(), true));

                $_POST['imagen'] = $nombre_imagen;
            }

            //Leer imagen el viaje incluye
            // if (!empty($_FILES['imgincluye']['tmp_name'])) {
            //     $carpeta_imagenes_incluye = '../public/img/viajes/incluye';

            //     //Crear la carpeta si no existe
            //     if (!is_dir($carpeta_imagenes_incluye)) {
            //         mkdir($carpeta_imagenes_incluye, 0755, true);
            //     }

            //     $imagen_png_incluye = Image::make($_FILES['imgincluye']['tmp_name'])->fit(350, 600)->encode('png', 100);
            //     $imagen_webp_incluye = Image::make($_FILES['imgincluye']['tmp_name'])->fit(350, 600)->encode('webp', 100);

            //     $nombre_imagen_incluye = md5(uniqid(rand(), true));

            //     $_POST['imgincluye'] = $nombre_imagen_incluye;
            // }

            $viaje->sincronizar($_POST);

            //Validar
            $alertas = $viaje->validar();

            //Guardar el Registro
            if (empty($alertas)) {
                //Guardar las imagenes
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png");
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp");

                //Guardar las imagenes del viaje incluye
                // $imagen_png_incluye->save($carpeta_imagenes_incluye . '/' . $nombre_imagen_incluye . ".png");
                // $imagen_webp_incluye->save($carpeta_imagenes_incluye . '/' . $nombre_imagen_incluye . ".webp");

                // Guardar en la BD
                $resultado = $viaje->guardar();

                if ($resultado) {
                    header('Location: /admin/viajes');
                }
            }
        }

        $router->render('admin/viajes/crear', [
            'titulo' => 'Registrar Viaje',
            'alertas' => $alertas,
            'estatus' => $estatus,
            'viaje' => $viaje,
            'actvOpcionales' => $actvOpcionales
        ]);
    }

    public static function editar(Router $router) {

        if (!is_admin()) {
            header('Location: /login');
        }

        $alertas = [];
        $estatus = Estatus::all('ASC');
        $actvOpcionales = ActvOpcional::all('ASC');

        //Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /admin/viajes');
        }

        //Obtener viaje a Editar
        $viaje = Viaje::find($id);

        if (!$viaje) {
            header('Location: /admin/viajes');
        }

        $viaje->imagen_actual = $viaje->imagen;
        // $viaje->imagen_actual_incluye = $viaje->imgincluye;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!is_admin()) {
                header('Location: /login');
            }

            //Leer imagen
            if (!empty($_FILES['imagen']['tmp_name'])) {
                $carpeta_imagenes = '../public/img/viajes';

                //Crear la carpeta si no existe
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0755, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(350, 600)->encode('png', 100);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(350, 600)->encode('webp', 100);

                $nombre_imagen = md5(uniqid(rand(), true));

                $_POST['imagen'] = $nombre_imagen;
            } else {
                $_POST['imagen'] = $viaje->imagen_actual;
            }

            //Leer imagen el viaje incluye
            // if (!empty($_FILES['imgincluye']['tmp_name'])) {
            //     $carpeta_imagenes_incluye = '../public/img/viajes/incluye';

            //     //Crear la carpeta si no existe
            //     if (!is_dir($carpeta_imagenes_incluye)) {
            //         mkdir($carpeta_imagenes_incluye, 0755, true);
            //     }

            //     $imagen_png_incluye = Image::make($_FILES['imgincluye']['tmp_name'])->fit(350, 600)->encode('png', 100);
            //     $imagen_webp_incluye = Image::make($_FILES['imgincluye']['tmp_name'])->fit(350, 600)->encode('webp', 100);

            //     $nombre_imagen_incluye = md5(uniqid(rand(), true));

            //     $_POST['imgincluye'] = $nombre_imagen_incluye;
            // } else {
            //     $_POST['imgincluye'] = $viaje->imagen_actual_incluye;
            // }

            $viaje->sincronizar($_POST);

            $alertas = $viaje->validar();

            if (empty($alertas)) {
                if (isset($nombre_imagen)) {
                    //Guardar las imagenes en el servidor
                    $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png");
                    $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp");
                }

                if (isset($nombre_imagen_incluye)) {
                    //Guardar las imagenes del viaje incluye
                    // $imagen_png_incluye->save($carpeta_imagenes_incluye . '/' . $nombre_imagen_incluye . ".png");
                    // $imagen_webp_incluye->save($carpeta_imagenes_incluye . '/' . $nombre_imagen_incluye . ".webp");
                }

                $resultado = $viaje->guardar();

                if ($resultado) {
                    header('Location: /admin/viajes');
                }
            }
        }

        $router->render('admin/viajes/editar', [
            'titulo' => 'Actualizar Viaje',
            'alertas' => $alertas,
            'estatus' => $estatus,
            'viaje' => $viaje,
            'actvOpcionales' => $actvOpcionales
        ]);
    }

    public static function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header('Location: /login');
            }
            $id = $_POST['id'];
            $viaje = Viaje::find($id);
            if (!isset($viaje)) {
                header('Location: /admin/viajes');
            }
            $resultado = $viaje->eliminar();
            if ($resultado) {
                header('Location: /admin/viajes');
            }
        }
    }
}
