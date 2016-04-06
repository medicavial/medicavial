$("#map-canvas").gMap({

    styles: [{
        stylers: [{
            featureType: 'water', // set the water color
            elementType: 'geometry.fill', // apply the color only to the fill
            stylers: [{
                color: '#adc9b8'
            }]
        }, {
            featureType: 'landscape.natural', // set the natural landscape
            elementType: 'all',
            stylers: [{
                hue: '#809f80'
            }, {
                lightness: -35
            }]
        }, {
            featureType: 'poi', // set the point of interest
            elementType: 'geometry',
            stylers: [{
                hue: '#f9e0b7'
            }, {
                lightness: 30
            }]
        }, {
            featureType: 'road', // set the road
            elementType: 'geometry',
            stylers: [{
                hue: '#d5c18c'
            }, {
                lightness: 14
            }]
        }, {
            featureType: 'road.local', // set the local road
            elementType: 'all',
            stylers: [{
                hue: '#ffd7a6'
            }, {
                saturation: 100
            }, {
                lightness: -12
            }]
        }]
    }],
    controls: false,
    scrollwheel: false,
    maptype: 'ROADMAP',
    markers: [{
            latitude: 40.753317,
            longitude: -73.968905,
            icon: {
                image: "images/location.png",
                iconsize: [85, 121],
                iconanchor: [85, 121]
            }
        },

    ],
    icon: {
        image: "images/location.png",
        iconsize: [85, 121],
        iconanchor: [85, 121]
    },
    latitude: 40.753317,
    longitude: -73.968905,

    zoom: 12,
    mapTypeId: 'Styled'
});

/**
* chat Module
*
* Description chat medicavial
*/

angular.module('chat', ['ui.bootstrap','ngCookies','ngMessages'], function($interpolateProvider) {
        //aqui cambiamos la forma en como mostramos las variables de angular en html
        // solo cambiaremos {{ variableName }} por <% variableName %>
        // ya que laravel con blade ocupa dobles llaves para las variables
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
})
.controller('contactoCtrl',contactoCtrl)
.controller('citaCtrl',citaCtrl)
.controller('membresiaCtrl',membresiaCtrl);
// .directive('chatMv', chatMv)

// function chatMv() {

//     var directive = {
//         scope:{},
//         restrict: 'EA',
//         templateUrl: 'vistas/chat.html',
//         controller: controlador,
//         //aqui esuchamos lo mensajes que se van agregando y para poner simpre el ultimo mensaje visible
//         link: function(scope, element) {
//             scope.$watchCollection('mensajes', function() {
//             var $list = $(element).find('.js-chat-list');
//                 var scrollHeight = $list.prop('scrollHeight');
//                 $list.animate({scrollTop: scrollHeight}, 500);              
//             });
//         }
//     };

//     return directive;

// }

function controlador($scope, $firebaseArray,$firebaseObject,$firebase,$cookies,$window) {

    $scope.detalle = false;
    $scope.chat = false;
    $scope.mensajes = [];
    $scope.usuario = '';

    var userid = 2;

    var ref = new Firebase("https://chatmv.firebaseio.com/clientes");
    var obj = $firebaseObject(ref);


    // $window.onbeforeunload = function (evt) {
    //     console.log(evt);
    //     return 'Texto de aviso';
    // }

    $scope.inicio = function(){
        
        if ($cookies.get('chat') != undefined) {
            $scope.iniciaChatGuardado();
        }

    }

    $scope.iniciaChatGuardado = function(){

        $scope.chatid = $cookies.get('chat');
        $scope.usuario = $cookies.get('usuario');
        $scope.chat = true;
        $scope.detalle = true;
        
        var datos = ref.child($scope.chatid);
        $scope.mensajes = $firebaseArray(datos);
        
    }


    $scope.iniciaChat = function(){


        if ($scope.usuario != '') {
            $scope.cadena = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
            $scope.chatid = $scope.usuario + '_' + $scope.cadena;

            $scope.chat = true;
            $cookies.put('chat',$scope.chatid);
            $cookies.put('usuario',$scope.usuario);

            var datos = ref.child($scope.chatid);
            $scope.mensajes = $firebaseArray(datos);
        }else{
            alert('Por favor ingresa tu nombre');
        }

    }

    $scope.enviaMensaje = function(){
        var f = new Date();
        var fecha = f.getDay()+"/"+f.getMonth()+"/"+f.getFullYear() + ' ' +f.getHours()+":"+f.getMinutes()+":"+f.getSeconds(); 
        
        $scope.mensajes.$add({
            from: $scope.usuario,
            content: $scope.mensaje,
            ip:IP,
            origin:navigator.appVersion,
            browser:navigator.userAgent,
            date:fecha
        });

        $scope.mensaje = '';
    }

    $scope.cerrarSesion = function(){


        if (confirm("¿Seguro que deseas cerrar el chat?")) {

            var chatRef = new Firebase('https://chatmv.firebaseio.com/clientes/'+ $scope.chatid);


            $firebaseObject(chatRef).$remove().then(function (ref){
                // console.log(ref);
                // $scope.detalle = false;
                $scope.chat = false;
                $scope.mensaje = '';
                $scope.usuario = '';
                $cookies.remove('chat');
                $cookies.remove('usuario');

            },function (error){
                console.log("Error:", error);
            });
            
        };
    }

}

function contactoCtrl($scope,$http){

    $scope.mesnaje = '';
    $scope.error = '';

    $scope.inicio = function(){
        $scope.datos = {
            nombres:'',
            apellidos:'',
            telefono:'',
            correo:'',
            comentarios:''
        }
    }

    $scope.enviaContacto = function(){

        $('#botonContacto').button('loading');
        $scope.mesnaje = '';

        $http.post('/contacto',$scope.datos).then(
            function (data){
                $scope.mensaje = data.data;
                $('#botonContacto').button('reset');
                $scope.inicio();
            },
            function (error){
                $scope.error = 'Algo Salio mal intentalo nuevamente por favor';
                $('#botonContacto').button('reset');
            }
        )
    }

}

function citaCtrl($scope,$http){
    
    $scope.mesnaje = '';
    $scope.error = '';

    $scope.tiempo = new Date();

    var hora = new Date();
    hora.setMinutes( 0 );

    $scope.hoy = function(){
        $scope.datosCita.fecha = new Date();
    }

    $scope.inicio = function(){

        $scope.datosCita = {
            nombre:'',
            fecha:$scope.tiempo,
            hora:hora,
            telefono:'',
            correo:'',
            lugar:'',
            comentarios:''
        }

    }

    $scope.dateOptions = {
        minDate: new Date(),
        startingDay: 1,
        showWeeks: true,
        todayBtn: true,
    };

    $scope.generaCita = function(){

        $('#botonCita').button('loading');
        
        $scope.error = '';
        $scope.mesnaje = '';

        // console.log($scope.datosCita);
        $http.post('/cita',$scope.datosCita).then(
            function (data){
                $scope.mensaje = data.data;
                $('#botonCita').button('reset');
                $scope.inicio();
            },
            function (datos){
                if (datos.data.error) {
                    $scope.error = 'Recuerda que los campos nombre, correo y lugar son obligatorios por favor';
                }else{
                    $scope.error = 'Algo Salio mal intentalo nuevamente por favor';
                }
                $('#botonCita').button('reset');
            }
        )
    }

}

function membresiaCtrl($scope,$location,$http) {

    $scope.interacted = function(field) {
      return $scope.membresiaForm.$submitted && field.$invalid;
    };
    $scope.interacted1 = function(field) {
      return $scope.referenciasForm.$submitted && field.$invalid;
    };

    $http.get('/unidades').then(function (datos){
        // console.log(datos);
        $scope.unidades = datos.data;
    });

    $scope.username =  '';
    $scope.cordinacion =  '';
    $scope.uniClave = '';

    $scope.verForm = true;
    $scope.nombreMembresia = '';
    $scope.cargadorMem = false;

    $scope.inicio = function(){

        $scope.membresia = {
            nombre:'',
            apanterno:'',
            amaterno:'',
            email:'',
            telefono:'',
            codPos:'',
            obs:'',
            unidad:''
        }

        $scope.referencia = {
            nombre:'',
            email:'',
            telefono:'',
            parentezco:''
        }

        $scope.veTabla = false; 
        $scope.sumaReferencia = [] ;  

        var cont = 1;

    }



    $scope.veTabla = false;

    $scope.agregaParentezco = function(){

        if($scope.referenciasForm.$valid){

            // console.log('entro');  

            if($scope.referencia.nombre !=''){  

                $scope.msjTel = false;
                $scope.cont = {};   

                if($scope.sumaReferencia == undefined){
                   $scope.veTabla = false; 
                }else{
                    $scope.veTabla = true; 
                } 

                $scope.cont.nombre = $scope.referencia.nombre;
                $scope.cont.email = $scope.referencia.email;
                $scope.cont.telefono = $scope.referencia.telefono;
                $scope.cont.parentezco = $scope.referencia.parentezco; 
                $scope.cont.cont = cont;            
                $scope.sumaReferencia.push($scope.cont); 
                $scope.referencia = {
                    nombre:'',
                    email:'',
                    parentezco:''
                }  

                $scope.referenciasForm.$submitted=false;              
                cont++; 
            
            }else{
                $scope.msjTel = true;
            }
        }

    }

    $scope.mensajeMembresia=false;
    
    $scope.crearMembresia = function(){ 

        // console.log($scope.membresiaForm.$valid);
        $scope.validar = false;
        if($scope.membresiaForm.$valid){
            
            $('#botonMem').button('loading');

            $scope.cargadorMem = true; 
            $scope.mensaje = ''; 

            $scope.todo = {membresia:$scope.membresia,referencias:$scope.sumaReferencia};

            $http.post('/membresia',$scope.todo)
            .success( function (data){   
                $scope.mensaje = data;
                $('#botonMem').button('reset');
                $scope.inicio();
            }).error( function (xhr,status,data){  
                alert('Algo salio mal verifica tu conexión e intentalo nuevamente por favor');
                $('#botonMem').button('reset');
            }); 
        }

    } 

    $scope.reactivarFormulario = function(){  
        
        $scope.mensajeMembresia=false;
        
        $scope.incidencias={
            tipo:'',
            severidad:'',
            observaciones:'',
            archivo:'',
            temporal:''
        }

        $scope.membresia={
            nombre:'',
            apanterno:'',
            amaterno:'',
            email:'',
            telefono:'',
            codPos:'',
            obs:''
        }    
    } 

}

