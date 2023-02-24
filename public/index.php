<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\DashBoardController;
use Controllers\DetallesController;
use Controllers\PaginasController;
use Controllers\ViajesController;

$router = new Router();

// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

//  Area de administracion
$router->get('/admin/dashboard', [DashBoardController::class, 'index']);
$router->get('/admin/actividad_opcional', [DashBoardController::class, 'indexActvOpcional']);
$router->get('/admin/actividad_opcional/crear', [DashBoardController::class, 'crearActvOpcional']);
$router->post('/admin/actividad_opcional/crear', [DashBoardController::class, 'crearActvOpcional']);
$router->get('/admin/actividad_opcional/editar', [DashBoardController::class, 'editarActvOpcional']);
$router->post('/admin/actividad_opcional/editar', [DashBoardController::class, 'editarActvOpcional']);
$router->post('/admin/actividad_opcional/eliminar', [DashBoardController::class, 'eliminarActvOpcional']);


//Area de viajes
$router->get('/admin/viajes', [ViajesController::class, 'index']);
$router->get('/admin/viajes/crear', [ViajesController::class, 'crear']);
$router->post('/admin/viajes/crear', [ViajesController::class, 'crear']);
$router->get('/admin/viajes/editar', [ViajesController::class, 'editar']);
$router->post('/admin/viajes/editar', [ViajesController::class, 'editar']);
$router->post('/admin/viajes/eliminar', [ViajesController::class, 'eliminar']);

//Area de detalles de viajes
$router->get('/admin/detalles', [DetallesController::class, 'index']);
$router->get('/admin/detalles/crear', [DetallesController::class, 'crear']);
$router->post('/admin/detalles/crear', [DetallesController::class, 'crear']);

//Area Publica
$router->get('/', [PaginasController::class, 'index']);
$router->get('/home', [PaginasController::class, 'home']);
$router->get('/viaje/index', [PaginasController::class, 'viaje']);
$router->get('/viaje/pago', [PaginasController::class, 'pago']);
$router->get('/agendadeviajes', [PaginasController::class, 'agendadeviajes']);
$router->get('/about', [PaginasController::class, 'about']);
$router->get('/cookies', [PaginasController::class, 'cookies']);
$router->get('/privacy', [PaginasController::class, 'privacy']);
$router->get('/politicadepago', [PaginasController::class, 'politicadepago']);

$router->comprobarRutas();
