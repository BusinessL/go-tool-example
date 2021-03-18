<?php

require "../../Proto/Demo/HelloResponse.php";
require "../../Proto/GPBMetadata/Hello.php";

$http = new \Swoole\Http\Server('0.0.0.0', 9502);

$http->set([
    'open_http2_protocol' => true,
]);
$http->on('workerStart', function (\Swoole\Http\Server $server) {
    echo "workerStart \n";
});
$http->on('request', function (\Swoole\Http\Request $request, \Swoole\Http\Response $response) {
    // request_uri 和 proto 文件中 rpc 对应关系: /{package}.{service}/{rpc}
    $path = $request->server['request_uri'];

    if ($path == '/Demo.Hello/SayHello') {
        $response_message = new \Demo\HelloResponse();

        $response_message->setCode(200);
        $response_message->setMessage('Hello ' . $request->rawContent());

        $response->end($response_message->serializeToString());
    }
});

$http->start();