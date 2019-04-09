// GUARDAR EN EL CACHE DINAMICO
function actualizaCacheDinamico( dynamicCache, req, res ) {
    if ( res.ok ) {
        return caches.open( dynamicCache ).then( cache => {
                cache.put( req, res.clone() );
                return res.clone();
        });

    } else {
        return res;
    }

}


// CARGA CONTENIDO DESDE CACHE, PERO (SI HAY CONEXION) ACTUALIZA LOS ARCHIVOS
// ALMACENADOS EN CACHE PARA CARGAR LA VERSION MAS RECIENTE LA SIGUENTE VEZ
function actualizaCacheStatico( staticCache, req, APP_SHELL_INMUTABLE ) {
    if ( APP_SHELL_INMUTABLE.includes( req.url ) ) {
        // No hace falta actualizar el inmutable
        // console.log('existe en inmutable', req.url );

    } else {
        // console.log('actualizando', req.url );
        if( req.url.includes('/undefined') ){
            return fetch('/images/no-img.jpg').then(res => {
                return actualizaCacheDinamico(staticCache, req, res);
            });
        }

        return fetch( req ).then( res => {
                    return actualizaCacheDinamico( staticCache, req, res );
                });
    }


}
