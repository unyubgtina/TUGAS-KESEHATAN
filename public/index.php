<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Hapus atau nonaktifkan bagian ini jika file maintenance tidak ada
// if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
//     require $maintenance;
// }

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

// Debugging untuk memastikan class Request tersedia
if (!class_exists('Illuminate\Http\Request')) {
    die('Request class is not available!');
}

try {
    $response = $kernel->handle(
        $request = Request::capture()
    )->send();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    exit;
} finally {
    $kernel->terminate($request, $response ?? null);
}
