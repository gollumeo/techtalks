<?php

use App\Websockets\WebSocketController;
use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;
use Illuminate\Support\Facades\Route;
use App\Events\TestEvent;
use App\Websockets\MyWebSocketServer;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-websockets', function () {
    return view('test-websockets');
});

Route::get('/test-event', function () {
    event(new TestEvent());
    return 'Event sent';
});

Route::get('/my-websocket-server', function () {
    $webSocketServer = new WebSocketController();

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                $webSocketServer
            )
        ),
        5500
    );

    $server->run();
});
