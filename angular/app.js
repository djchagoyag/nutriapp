var app = angular.module('nutriapp', [
    'ngRoute', 'jcs-autoValidate',
    'nutriapp.configuracion',
    'nutriapp.pacienteCtrl', //Controladores
    'nutriapp.dashboardCtrl',
    'nutriapp.expedienteCtrl',
    'nutriapp.citaCtrl',
    'nutriapp.pacientes', //Servicios
    'nutriapp.expediente'



]);

angular.module('jcs-autoValidate')
        .run([
            'defaultErrorMessageResolver',
            function (defaultErrorMessageResolver) {
                defaultErrorMessageResolver.setI18nFileRootPath('angular/lib');
                defaultErrorMessageResolver.setCulture('es-co');
            }
        ]);

        



app.controller('mainCtrl', ['$scope', 'Configuracion', function ($scope, Configuracion) {

        $scope.config = {};

        $scope.usuario = {
            "nombre": "Nutriolog@ Nombre"
        };

        $scope.titulo = "";
        $scope.subtitulo = "";

        Configuracion.cargar().then(function () {

            $scope.config = Configuracion.config;


        });

        //========= Funciones globales del scope==================

        $scope.activar = function (menu, submenu, titulo, subtitulo) {

            $scope.titulo = titulo;
            $scope.subtitulo = subtitulo;

            $scope.mPaciente = "";
            $scope.mExpediente = "";
            $scope.mCitas = "";
            $scope[menu] = 'active';

            //$scope[menu] = 'nav-item';
            //$scope[menu] = 'has-treeview';

        };





    }]);

app.config(['$routeProvider', function ($routeProvider) {

        $routeProvider
                .when('/', {
                    templateUrl: 'Dashboard/Dashboard.html',
                    controller: 'dashboarddCtrl'

                })
                .when('/pacientes/:pag', {
                    templateUrl: 'pacientes/pacientes.php',
                    controller: 'pacientesCtrl'

                })
                .when('/citas', {
                    templateUrl: 'citas/citas.html',
                    controller: 'citasCtrl'

                })
                .when('/expediente/:id', {
                    templateUrl: 'pacientes/expediente.php',
                    controller: 'expedientesCtrl'

                })
                .otherwise({
                    redirectTo: '/'
                })

    }]);


