const socket = new WebSocket('ws://127.0.0.1:5500');

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
