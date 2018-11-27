var url         = window.location.href;
var swLocation  = '/sw.js';
var swReg;

// VERIFICAMOS SI EL NAVEGADOR SOPORTA SERVICE WORKER
if ( navigator.serviceWorker ) {

    if ( url.includes('localhost') ) {
      console.warn('DEVELOP MODE: RUN php artisan serve');
        swLocation = '/sw.js';
    }

    // SW SE REGISTRA CUANDO EL SITIO CARGA EN SU TOTALIDAD
    window.addEventListener('load', function() {

        // EVALUAMOS SI SE REGISTRÓ EL SW
        navigator.serviceWorker.register( swLocation ).then( function(reg){
            swReg = reg;
            // swReg.pushManager.getSubscription().then( verificaSuscripcion );
        });
    });
}


// VERIFICAR CONEXION
function isOnline() {
    let offlineBar = document.getElementById('offline-static');
    let telefono = document.getElementById('telefono');
    let chat = document.getElementById('PureChatWidget');

    if ( navigator.onLine ) {
        offlineBar.style.display = 'none';
        chat.style.display = 'block';
        telefono.style.display = 'block';
    } else{
        offlineBar.style.display = 'block';
        chat.style.display = 'none';
        telefono.style.display = 'none';
    }
};

window.addEventListener('online', isOnline );
window.addEventListener('offline', isOnline );

isOnline();
