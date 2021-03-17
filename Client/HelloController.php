<?php

use Grpc\Service;

require "../vendor/yun-hai/grpc-tool/src/Service.php";


$http = new Swoole\Http\Server('0.0.0.0', 9501);

$http->on('workerStart', function (\Swoole\Http\Server $server) {
    echo "workerStart \n";
});


$http->on('Request', function ($request, $response) {

    var_dump($response);
});

$http->start();