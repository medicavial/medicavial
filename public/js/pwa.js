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
        isOnline();

        // EVALUAMOS SI SE REGISTRÓ EL SW
        navigator.serviceWorker.register( swLocation ).then( function(reg){
            swReg = reg;
            // swReg.pushManager.getSubscription().then( verificaSuscripcion );
        });
    });
}


// VERIFICAR CONEXION
function isOnline() {
    let chat = document.getElementById('PureChatWidget');

    let elementos = document.getElementsByClassName('elementSwitch');
    let avisos = document.getElementsByClassName('avisoSwitch');

    if ( navigator.onLine ) {
        chat.style.display = 'block';

        for (var i = 0; i < elementos.length; i++) {
          elementos[i].style.display='block';
          avisos[i].style.display='none';
        }

    } else{
        chat.style.display = 'none';

        for (var i = 0; i < elementos.length; i++) {
          elementos[i].style.display='none';
          avisos[i].style.display='block';
        }
    }
};

window.addEventListener('online', isOnline );
window.addEventListener('offline', isOnline );

isOnline();
