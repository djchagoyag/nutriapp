var app = angular.module('nutriapp.pacienteCtrl', []);


// ============== Controlador de Expedientes ================


app.controller('pacientesCtrl', ['$scope', 'Pacientes', '$routeParams', function ($scope, Pacientes, $routeParams) {

        var pag = $routeParams.pag;

        var nombre = $routeParams.nombre;

        $scope.activar('mPaciente', '', ' Pacientes ', ' Listado ');
        $scope.pacientes = {};
        $scope.paginacion = {};
        $scope.numPaginas = {};
        $scope.pacienteSel = {};





        $scope.moverA = function (pag) {

            Pacientes.cargarPagina(pag).then(function () {

                $scope.pacientes = Pacientes.usuarios;
                $scope.paginacion = Pacientes;

                $scope.numPaginas = Pacientes.paginas;


            });

        };



        $scope.moverA(pag);

        $scope.moverNombre = function (pag) {

            Pacientes.cargarPaginaPorNombre(pag).then(function () {

                $scope.pacientes = Pacientes.usuarios;
                $scope.paginacion = Pacientes;

                $scope.numPaginas = Pacientes.paginas;


            });

        };

        $scope.moverNombreDesc = function (pag) {

            Pacientes.cargarPaginaPorNombreDesc(pag).then(function () {

                $scope.pacientes = Pacientes.usuarios;
                $scope.paginacion = Pacientes;

                $scope.numPaginas = Pacientes.paginas;


            });

        };

        $scope.moverBusqueda = function (pag, nombre) {

            Pacientes.cargarBusqueda(pag, nombre).then(function () {

                $scope.pacientes = Pacientes.usuarios;
                $scope.paginacion = Pacientes;

                $scope.numPaginas = Pacientes.paginas;


            });

        };



        // ================. Mostrar Modal de edicion====================

        $scope.mostrarModal = function (paciente) {

            angular.copy(paciente, $scope.pacienteSel);

            $("#modal_paciente").modal();
        }


        $scope.guardar = function (paciente, frmPaciente) {

            Pacientes.guardar(paciente).then(function () {

                $("#modal_paciente").modal('hide');

                //$scope.pacienteSel = {};

                frmPaciente.autoValidateFormOptions.resetForm();

                window.location.reload();

            });


        }

        $scope.cargausuarios = function (usuario) {

            Pacientes.buscar(usuario).then(function () {

                $scope.usuario = Pacientes.usuarios;


            });
        }
        //Cuando eliges un usuario lo reemplaza en el campo de texto
        $scope.cambiausuario = function (usuario) {
            $scope.usuario = usuario;
            $scope.usuarios = null;
        }





    }]);

