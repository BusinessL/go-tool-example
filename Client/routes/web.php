<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $services = new \Gtool\Service('0.0.0.0:9502', 'Demo');

    $helloRequest = new Demo\HelloRequest();
    $helloRequest->setUsername('ku');
    $response = $services->unaryCall('Hello', 'SayHello', $helloRequest);
    var_dump($response);
});
