<?php

function debuguear($variable): string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html): string {
    $s = htmlspecialchars($html);
    return $s;
}

function pagina_actual($path): bool {
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}

//Revisar si el usuario esta autenticado
function is_auth(): bool {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

//Revisar si un usuario es administrador
function is_admin(): bool {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function validarORediceccionar(string $url) {
    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("Location: $url");
    }

    return $id;
}
