var url         = window.location.href;
var swLocation  = '/sw.js';
var swReg;

// VERIFICAMOS SI EL NAVEGADOR SOPORTA SERVICE WORKER
if ( navigator.serviceWorker ) {

    if ( url.includes('localhost') ) {
        swLocation = '/medicavial/public/sw.js';
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
