/***********************************
SERVICE WORKER BY SAMUEL RAMÍREZ
NOVEMBER 2018
***********************************/


// IMPORTS
importScripts('js/sw-utils.js');


// DECLARAMOS LOS NOMBRES QUE GUARDARÁN CACHÉ
// el inmutable no debería cambiar nunca
const STATIC_CACHE    = 'static-v6';
const DYNAMIC_CACHE   = 'dynamic-v6';
const INMUTABLE_CACHE = 'inmutable-v6';

// 'membresia',
const APP_SHELL = [
    '/',
    'clinicas',
    'cita',
    'contacto',
    'doctores',
    'facturacion',
    'nosotros',
    'pacientes',
    'unidades',
    'manifest.json',
    'css/style.css',
    'js/pwa.js',
    'js/sw-utils.js',
    'js/app.js',
    'images/favicon.png',
    'images/mv-blanco-144.png',
    'images/loader1.gif',
    'images/logoMV.png',
    'images/second.png',
    'images/bone2.png',
    'images/up-scroll.png',
    'images/new-slider/1.png',
    'images/new-slider/membresia.png',
    'images/new-slider/24hrs.png',
    'images/new-slider/324hrs.png',
    'images/new-slider/s2-img2.png',
    'images/new-slider/s3-ic9.png',
    'images/new-slider/s3-ic16.png',
    'images/new-slider/s3-ic2.png',
    'images/new-slider/s3-ic5.png',
    'images/new-slider/s3-ic7.png',
    'images/new-slider/s3-ic4.png',
    'images/new-slider/s3-ic11.png',
    'images/new-slider/s3-ic15.png',
    'images/new-slider/s3-ic1.png',
    'images/new-slider/s3-ic13.png',
    'images/new-slider/s4-img7.png',
    'images/new-slider/s4-img11.png',
    'images/nosotros.jpg',
    'images/strip-shadow.png',
    'images/bc-back1.jpg',
    'images/bc-back4.jpg',
    'images/valor_honestidad.png',
    'images/valor_lealtad.png',
    'images/valor_creatividad.png',
    'images/valor_innovacion.png',
    'images/inner-content-back.jpg',
    'images/valor_trabajoenequipo.png',
    'images/valor_respeto.png',
    'images/valor_responsabilidadsocial.png',
    'images/clinicas/monterrey.jpg',
    'images/clinicas/puebla.jpg',
    'images/clinicas/merida.jpg',
    'images/clinicas/sanluis.jpg',
    'images/clinicas/chihuahua.jpg',
    'images/clinicas/veracruz.jpg',
    'images/clinicas/perisur.jpg',
    'images/clinicas/satelite.jpg',
    'images/clinicas/roma.jpg',
    'images/clinicas/interlomas.jpg',
    'images/clinicas/no-img.jpg',
    'images/ov-plus.png',
    'images/membresia.png',
    'images/mydoc-dummy-1.jpg',
    'images/li-bottom.jpg'
];

const APP_SHELL_INMUTABLE = [
    'css/jquery-ui-1.10.3.custom.css',
    'css/animate.css',
    'css/font-awesome.min.css',
    'css/blue.css',
    'css/slides.css',
    'css/inline.min.css',
    'css/bootstrap-datetimepicker.min.css',
    'bootstrap-new/js/bootstrap.min.js',
    'js/ui-bootstrap-tpls-1.2.4.min.js',
    'js/jquery.min.js',
    'js/jquery-ui-1.10.3.custom.min.js',
    'js/jquery.scrollUp.min.js',
    'js/jquery.sticky.min.js',
    'js/wow.min.js',
    'js/jquery.flexisel.min.js',
    'js/jquery.imedica.min.js',
    'js/custom-imedicajs.min.js',
    'js/moment.min.js',
    'js/angular.min.js',
    'js/angular-cookies.min.js',
    'js/angular-messages.min.js',
    'js/angular-locale_es-mx.js',
    'rs-plugin/css/settings.min.css',
    'rs-plugin/js/jquery.themepunch.tools.min.js',
    'rs-plugin/js/jquery.themepunch.revolution.min.js',
    'rs-plugin/assets/timer.png',
    'rs-plugin/assets/loader.gif',
    'rs-plugin/assets/large_right.png',
    'rs-plugin/assets/large_left.png',
    'fonts/icomoon.woff?d531m9',
    'fonts/fontawesome-webfont.woff?v=4.2.0',
    'https://fonts.googleapis.com/css?family=Open+Sans:400,700,300',
    'https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic',
    'https://fonts.gstatic.com/s/notosans/v7/o-0IIpQlx3QUlC5A4PNr5TRA.woff2',
    'https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2',
    'https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2',
    'https://fonts.gstatic.com/s/notosans/v7/o-0NIpQlx3QUlC5A4PNjXhFVZNyB.woff2',
    'https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
    // 'https://app.purechat.com/VisitorWidget/WidgetScript',
    // 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',
    // 'https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/common.js',
    // 'https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/util.js',
    // 'https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttp%3A%2F%2Flocalhost%3A8000%2F&5shttp%3A%2F%2Flocalhost%3A8000%2F&callback=_xdc_._v1kmne&token=72777',
];


// INSTALACIÓN DEL SW
self.addEventListener('install', e => {
    // INSTALAMOS LOS ARCHIVOS EN CACHE
    const cacheStatic = caches.open( STATIC_CACHE ).then( cache =>
      cache.addAll( APP_SHELL ));

    const cacheInmutable = caches.open( INMUTABLE_CACHE ).then( cache =>
      cache.addAll( APP_SHELL_INMUTABLE ));

    // ESPERAMOS HASTA QUE TERMINE DE GUARDAR LOS CACHES
    e.waitUntil( Promise.all([ cacheStatic, cacheInmutable ]) );
});


// ACTIVACIÓN DEL SW
self.addEventListener('activate', e => {
    console.info('SW by Samuel Ramirez https://www.samuel-ramirez.com');

    const respuesta = caches.keys().then( keys => {

        keys.forEach( key => {
            // SI LOS CACHES HAN CAMBIADO LOS ELIMINAMOS
            if ( key !== STATIC_CACHE && key.includes('static') ) {
                  return caches.delete(key);
            }

            if ( key !== DYNAMIC_CACHE && key.includes('dynamic') ) {
                  return caches.delete(key);
            }

            // el inmutable no debería cambiar nunca
            if (key !== INMUTABLE_CACHE && key.includes('inmutable')) {
                return caches.delete(key);
            }
        });
    });

    e.waitUntil( respuesta );
});


// ESCUCHAMOS PETICIONES FETCH
self.addEventListener('fetch', e => {
  let respuesta;

  // VERIFICAMOS SI EL REQUEST ESTÁ EN EL CACHE
  respuesta = caches.match( e.request ).then( res => {
      if ( res ) {
          actualizaCacheStatico( STATIC_CACHE, e.request, APP_SHELL_INMUTABLE );
          return res;
      } else {
          if (e.request.url === 'http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') {
            // let interceptado = new Request('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
            return fetch( 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' ).then( newRes => {
                return actualizaCacheDinamico( DYNAMIC_CACHE, e.request, newRes );
            });
          }

          if (e.request.url.includes('/undefined')) {
              return fetch('/images/no-img.jpg').then(newRes => {
                  return actualizaCacheDinamico(DYNAMIC_CACHE, e.request, newRes);
              });
          }


          return fetch( e.request ).then( newRes => {
              return actualizaCacheDinamico( DYNAMIC_CACHE, e.request, newRes );
          });
      }
  })

  e.respondWith( respuesta );
});
