var app = angular.module('nutriapp.pacientes', []);

app.factory('Pacientes', ['$http', '$q', function ($http, $q) {

        var self = {
            'cargando': false,
            'err': false,
            'conteo': 0,
            'usuarios': [],
            'pag_actual': 1,
            'pag_siguiente': 1,
            'pag_anterior': 1,
            'total_paginas': 1,
            'paginas': [],

            guardar: function (paciente) {

                var d = $q.defer();

                $http.post('PHP/DAO/agregarPaciente.php', paciente)
                        .success(function (respuesta) {


                            d.resolve();



                        });


                return d.promise;

            },

            actualizar: function (paciente) {

                var d = $q.defer();

                $http.post('PHP/DAO/actualizar_expediente.php', paciente)
                        .success(function (respuesta) {


                            d.resolve();



                        });


                return d.promise;

            },

            cargarPagina: function (pag) {

                var d = $q.defer();

                $http.get('PHP/DAO/cargarPacientes.php?pag=' + pag)
                        .success(function (data) {

                            //console.log(data);

                            self.err = data.err;
                            self.conteo = data.conteo;
                            self.usuarios = data.usuarios;
                            self.pag_actual = data.pag_actual;
                            self.pag_siguiente = data.pag_siguiente;
                            self.pag_anterior = data.pag_anterior;
                            self.total_paginas = data.total_paginas;
                            self.paginas = data.paginas;


                            return d.resolve();
                        });

                return d.promise;


            },
            cargarPaginaPorNombre: function (pag, nombre) {

                var d = $q.defer();

                $http.get('PHP/DAO/cargarPacientesNombre.php?pag=' + pag + '&nombre=' + nombre)
                        .success(function (data) {

                            //console.log(data);

                            self.err = data.err;
                            self.conteo = data.conteo;
                            self.usuarios = data.usuarios;
                            self.pag_actual = data.pag_actual;
                            self.pag_siguiente = data.pag_siguiente;
                            self.pag_anterior = data.pag_anterior;
                            self.total_paginas = data.total_paginas;
                            self.paginas = data.paginas;


                            return d.resolve();
                        });

                return d.promise;


            },

            cargarPaginaPorNombreDesc: function (pag) {

                var d = $q.defer();

                $http.get('PHP/DAO/cargarPacientesNombreDesc.php?pag=' + pag)
                        .success(function (data) {

                            self.err = data.err;
                            self.conteo = data.conteo;
                            self.usuarios = data.usuarios;
                            self.pag_actual = data.pag_actual;
                            self.pag_siguiente = data.pag_siguiente;
                            self.pag_anterior = data.pag_anterior;
                            self.total_paginas = data.total_paginas;
                            self.paginas = data.paginas;


                            return d.resolve();
                        });

                return d.promise;


            },
            cargarBusqueda: function (pag, nombre) {

                var d = $q.defer();

                $http.get('PHP/DAO/cargarBusqueda.php?pag=' + pag + '&nombre=' + nombre)
                        .success(function (data) {

                            //console.log(data);

                            self.err = data.err;
                            self.conteo = data.conteo;
                            self.usuarios = data.usuarios;
                            self.pag_actual = data.pag_actual;
                            self.pag_siguiente = data.pag_siguiente;
                            self.pag_anterior = data.pag_anterior;
                            self.total_paginas = data.total_paginas;
                            self.paginas = data.paginas;


                            return d.resolve();
                        });

                return d.promise;


            },

            buscar: function (usuario) {

                var d = $q.defer();

                $http.get('PHP/DAO/cargarPacientesNombre.php?usu=' + usuario)
                        .success(function (data) {


                            self.usuarios = data.usuarios;

                            return d.resolve();
                        });

                return d.promise;


            }


        };

        return self;

    }]);