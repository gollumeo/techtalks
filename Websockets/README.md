# Les Web Sockets

Les Web Sockets sont un protocole de communication bidirectionnelle et en temps réel entre un client (généralement un navigateur Web) et un serveur. Les Web Sockets permettent d'établir une connexion persistante entre le client et le serveur, ce qui permet aux données de circuler dans les deux sens sans avoir besoin de recharger la page ou de renvoyer une demande.

Les Web Sockets ont été introduits dans HTML5 et sont devenus une spécification standard en 2011. Depuis lors, les Web Sockets ont connu une adoption rapide et sont utilisés dans une grande variété d'applications Web, y compris les jeux en ligne, les applications de messagerie, les applications collaboratives, etc.

## Pourquoi les Web Sockets sont importants?

Les Web Sockets permettent une communication en temps réel, ce qui signifie que les données peuvent être transmises instantanément entre le client et le serveur. Cela permet des applications plus dynamiques et plus interactives.

## Côté Frontend

Les Web Sockets sont utilisés en JavaScript/React pour établir une connexion avec le serveur et recevoir les données en temps réel. Voici un exemple simple de code JavaScript qui utilise les Web Sockets pour recevoir des données en temps réel :
 ````javascript
const socket = new WebSocket('ws://localhost:8080');
socket.addEventListener('message', function (event) {
  console.log('Message from server ', event.data);
});
````

## Côté Backend

Les Web Sockets sont implémentés en PHP. Voici un exemple simple de code PHP qui établit une connexion WebSocket avec le client et envoie des données en temps réel :
 ````php
 $server = new WebSocketServer("0.0.0.0", 8080);

$server->setConnectionHandler(function (WebSocketConnection $conn) {
  $conn->send("Hello, world!");
});

$server->run();
````

## Les Websockets et Laravel

Laravel fournit une API de Web Sockets qui vous permet de facilement implémenter des Web Sockets dans vos applications. Laravel utilise le paquet [Pusher](https://pusher.com/) pour implémenter les Web Sockets. Cependant, vous pouvez également utiliser d'autres fournisseurs de Web Sockets, comme [Laravel WebSockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction).

## Conclusion

Les Web Sockets sont un outil puissant pour les développeurs Web qui cherchent à créer des applications en temps réel. Ils permettent une communication bidirectionnelle en temps réel entre un client et un serveur, ce qui permet des applications plus dynamiques et plus interactives.

J'espère que cette présentation vous a aidé à comprendre les Web Sockets et leur utilisation. Merci de votre attention !