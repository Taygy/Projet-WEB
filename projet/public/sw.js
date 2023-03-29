self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open('first-app')
      .then(function (cache) {
        cache.addAll([
          '/',
          'index.php',
          '/src/css/style.css',
          '/src/js/app.js'
        ])
      })
  );
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request).then(function (response) {
      // Si la demande est dans le cache, on renvoie la réponse du cache
      if (response) {
        return response;
      }

      // Sinon, on effectue la requête réseau
      return fetch(event.request).then(function (response) {
        // On clone la réponse de la requête réseau
        let responseClone = response.clone();

        // Si la réponse est bien une réponse 200 OK, on l'ajoute au cache
        if (response.status === 200) {
          caches.open('my-cache').then(function (cache) {
            cache.put(event.request, responseClone);
          });
        }

        // On renvoie la réponse
        return response;
      }).catch(function () {
        // Si une erreur se produit, on renvoie une réponse d'erreur
        return new Response('Network error', {
          status: 503,
          statusText: 'Service Unavailable',
          headers: new Headers({
            'Content-Type': 'text/plain'
          })
        });
      });
    })
  );
});