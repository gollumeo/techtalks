<?php

namespace App\Websockets;

use AllowDynamicProperties;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\WampConnection;
use App\Websockets\WebSocketController;

#[AllowDynamicProperties] class MyWebSocketServer implements \Ratchet\ComponentInterface
{
    public function __construct()
    {
        $this->controller = new WebSocketController();
    }

    /**
     * @throws \Exception
     */
    public function onOpen(ConnectionInterface $conn)
    {
        $this->controller->onOpen($conn);
    }

    /**
     * @throws \Exception
     */
    public function onClose(ConnectionInterface $conn)
    {
        $this->controller->onClose($conn);
    }

    /**
     * @throws \Exception
     */
    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $this->controller->onError($conn, $e);
    }

    /**
     * @throws \Exception
     */
    public function onMessage(ConnectionInterface $from, $msg)
    {
        $this->controller->onMessage($from, $msg);
    }
}
