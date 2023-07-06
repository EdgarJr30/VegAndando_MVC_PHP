<?php
$db = mysqli_connect(
    $_ENV['DB_HOST'] = 'us-cdbr-east-06.cleardb.net',
    $_ENV['DB_USER'] = 'b5d78e53e0b04f',
    $_ENV['DB_PASS'] = '50b38089',
    $_ENV['DB_NAME'] = 'heroku_82a411f7a12acf1'
);

mysqli_set_charset($db, 'utf8');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
