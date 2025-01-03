<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

//$request = null; //ini untuk inisialisasi variabel request

try {
    //tangkap request dan kirim response
    $response = $kernel->handle(
        $request = Request::capture()
    )->send();
} catch (Exception $e) {
    //tangani kesalahan dan tampilkan pesan kesalahan
    //anda bisa mencetak pesan kesalahan atau mencatatnya ke log
    echo 'Error: ' . $e->getMessage();
    //jika anda ingin menghentikan eksekusi lebih lanjut, anda bisa menggunakan exit
    exit;
} finally {
    //pastikan unutk memanggil terminate meskipun terjadi kesalahan
    $kernel->terminate($request, $response ?? null);
}