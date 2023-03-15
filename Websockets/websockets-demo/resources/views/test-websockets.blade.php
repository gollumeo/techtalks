<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Web Sockets</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1>Test Web Sockets</h1>
<label for="message">Message:</label><input type="text" id="message">
<button id="send">Send</button>
<script>
    const socket = new WebSocket('ws://localhost:5500');

    socket.addEventListener('open', function (event) {
        console.log('Connected to WebSocket server');
    });

    socket.addEventListener('message', function (event) {
        console.log('Message from server', event.data);
    });

    document.getElementById('send').addEventListener('click', function (event) {
        const message = document.getElementById('message').value;
        socket.send(message);
    });
</script>
    </body>
</html>
