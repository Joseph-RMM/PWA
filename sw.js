const nombreCache = "CatFoxTestersCache"
//Evento install
//Solo ocurre cuando se detectan cambios en el sw.js
self.addEventListener('install', (evento) => {
    console.log("ServiceWorker Instalado");
    evento.waitUntil(
        caches.open(nombreCache)
        .then(
            function(cache) { //Una vez abierto el caché se agregan los archivos
                cache.addAll([
                    '/',
                    '/app.js',
                    '/favicon.ico',
                    '/manifest.json',
                    '/style.css',
                    '/logo-white.png',
                    '/menu-icon.png',
                    '/menu.js',
                    '/header.php',
                    '/index.php'
                ]);
            }
        )
    );
});

//Evento activate
/*Una vez ocurre el evento install, este espera a 
 *que el usuario cierre todas las instancias de la PWA
 *para activar la nueva versión del sw la siguiente vez
 *que abra la app */
self.addEventListener('activate', (evento) => {
    console.log("ServiceWorker Activado");
});

//Evento fetch
self.addEventListener('fetch', (evento) => {
    console.log("SW respondiendo a fetch",evento);
    evento.respondWith(
        caches.match(evento.request)
        .then((cacheResponse) => {
            return cacheResponse || fetch(evento.request);
        })
    );
})