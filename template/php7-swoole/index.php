<?php

include('function/src/Handler.php');

$http = new swoole_http_server("127.0.0.1", 9501);

$http->on("start", function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$http->on("request", function ($request, $response) {

    // var_dump($request->rawContent());
    var_dump($request->header);
    var_dump($request->server);
    // echo $request->server['request_method'];

    // echo $request->server['request_uri'];
    // echo $request->server['path'];
    // echo $request->rawContent();
    // echo $request->header['host'];
    
    $res = (new App\Handler())->handle("");
    $response->header("Content-Type", "text/plain");
    $response->status(200);
    $response->end($res);
});

$http->start();
