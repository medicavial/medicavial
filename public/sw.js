/***********************************
SERVICE WORKER BY SAMUEL RAMÍREZ
NOVEMBER 2018
***********************************/


// ABRIMOS CACHE
const STATIC_CACHE    = 'static-v1';
const DYNAMIC_CACHE   = 'dynamic-v1';
const INMUTABLE_CACHE = 'inmutable-v1';

// const raiz = '/';
const raiz = '/medicavial/public/';
// var url = window.location.href;
//
// if ( url.includes('localhost') ) {
//   raiz = '/medicavial/public/';
// }

const APP_SHELL = [
    raiz,
    // 'index.html',
    // 'css/style.css',
    // 'img/favicon.ico',
];


// INSTALACIÓN DEL SW
self.addEventListener('install', e => {
  console.log('INSTALANDO Service Worker by Samuel Ramírez - Noviembre 2018');

  const cacheStatic = caches.open( STATIC_CACHE ).then( cache =>
    cache.addAll( APP_SHELL ));
})


// ACTIVACIÓN DEL SW
self.addEventListener('activate', e => {
  console.log('Service Worker ACTIVO by Samuel Ramírez - Noviembre 2018');
})


// ESCUCHAMOS PETICIONES FETCH
self.addEventListener('fetch', e => {
  // console.log(e.request.url);
})
