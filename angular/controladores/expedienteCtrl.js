var app = angular.module('nutriapp.expedienteCtrl', []);


app.controller('expedientesCtrl', ['$scope', '$routeParams', 'Expedientes', function ($scope, $routeParams, Expedientes) {


        $scope.activar('mExpediente', '', 'Expediente', 'información');
        $scope.B     = true;
        $scope.DP    = true;
        $scope.A     = true;
        $scope.SC    = true;
        $scope.AG    = true;

        var id                  = $routeParams.id;
        /*var padecimiento_actual = $routeParams.padecimiento_actual; 
        var respiratorias       = $routeParams.respiratorias;
        var gastrointestinales  = $routeParams.gastrointestinales;
        var tratamientoActual   = $routeParams.tratamientoActual;
        var desparacitaciones   = $routeParams.desparacitaciones;
        var cirugias            = $routeParams.cirugias;
        var diabetes            = $routeParams.diabetes;
        var hipertension        = $routeParams.hipertension;
        var ecv                 = $routeParams.ecv;
        var dislipidemias       = $routeParams.dislipidemias;
        var acido               = $routeParams.acido;
        var cancer              = $routeParams.cancer;
        var calculo             = $routeParams.calculo;
        var otro                = $routeParams.otro;
        var frmAnteceddentes    = $routeParams.frmAnteceddentes;*/

        


        $scope.datos           = {};
        $scope.datosPersonales = {};

        $scope.antPersonales       = {};
        $scope.padecimiento_actual = {};
        $scope.respiratorias       = {};
        $scope.gastrointestinales  = {};
        $scope.tratamientoActual   = {};
        $scope.desparacitaciones   = {};
        $scope.cirugias            = {};

        $scope.antFamiliares = {};
        $scope.diabetes      = {};
        $scope.hipertension  = {};
        $scope.ecv           = {};
        $scope.dislipidemias = {};
        $scope.acido         = {};
        $scope.cancer        = {};
        $scope.calculo       = {};
        $scope.otro          = {};

        $scope.sigClinicos   = {};
        $scope.piel          = {};
        $scope.ojos          = {};
        $scope.boca          = {};
        $scope.lengua        = {};
        $scope.cabello       = {};
        $scope.uñas          = {};
        $scope.alergias      = {};
        $scope.mareos        = {};
        $scope.cabeza        = {};
        $scope.aversion      = {};
        $scope.gustos        = {};
        $scope.intolerancia  = {};
        $scope.articulacion  = {};

        $scope.histIndicadores = {};

        $scope.asignacion = {};

        $scope.antGen = {};
        $scope.asig = {};

         $scope.des = {};
         $scope.col1 = {};
         $scope.com = {};
         $scope.col2 = {};
         $scope.cen = {};


       

        $scope.recuperarExpediente = function (id) {

            Expedientes.recuperarExpediente(id).then(function () {

//=================DatosPersonales===============
                $scope.datos = Expedientes.datosPersonales;

                $scope.datosPersonales = $scope.datos[0];
                $scope.datosPersonales['edad']      = parseInt($scope.datosPersonales['edad'],10);
                $scope.datosPersonales['celular']   = parseInt($scope.datosPersonales['celular'],10);
                $scope.datosPersonales['estatura']  = parseInt($scope.datosPersonales['estatura'],10);
                
//=============Ant Personales======================
                $scope.antPersonales        = Expedientes.antecedentes_personales;

                $scope.padecimiento_actual  = $scope.antPersonales[0];
                $scope.respiratorias        = $scope.antPersonales[1];
                $scope.gastrointestinales   = $scope.antPersonales[2];
                $scope.tratamientoActual    = $scope.antPersonales[3];
                $scope.desparacitaciones    = $scope.antPersonales[4];
                $scope.cirugias             = $scope.antPersonales[5];
//==============Ant Familiares====================
                $scope.antFamiliares    = Expedientes.antecedentes_familiares;

                $scope.diabetes         = $scope.antFamiliares[7];
                $scope.hipertension     = $scope.antFamiliares[6];
                $scope.ecv              = $scope.antFamiliares[5];
                $scope.dislipidemias    = $scope.antFamiliares[4];
                $scope.acido            = $scope.antFamiliares[3];
                $scope.cancer           = $scope.antFamiliares[2];
                $scope.calculo          = $scope.antFamiliares[1];
                $scope.otro             = $scope.antFamiliares[0];

//============== Signos Clinicos =====================
                $scope.signos_clinicos = Expedientes.signos_clinicos;

                $scope.piel         = $scope.signos_clinicos[12];
                $scope.ojos         = $scope.signos_clinicos[11];
                $scope.boca         = $scope.signos_clinicos[10];
                $scope.lengua       = $scope.signos_clinicos[9];
                $scope.cabello      = $scope.signos_clinicos[8];
                $scope.unas         = $scope.signos_clinicos[7];
                $scope.alergias     = $scope.signos_clinicos[6];
                $scope.mareos       = $scope.signos_clinicos[5];
                $scope.cabeza       = $scope.signos_clinicos[4];
                $scope.aversion     = $scope.signos_clinicos[3];
                $scope.gustos       = $scope.signos_clinicos[2];
                $scope.intolerancia = $scope.signos_clinicos[1];
                $scope.articulacion = $scope.signos_clinicos[0];

                $scope.histIndicadores = Expedientes.historial_indicadores;

                $scope.asignacion      = Expedientes.asignacionGrupo;

            });
        };


        $scope.guardr = function (asignacion, frmAsignacion) {
            Expedientes.guardar(asignacion).then(function () {

                frmAsignacion.autoValidateFormOptions.resetForm();

                window.location.reload();

            });
        };

        $scope.actualizarDP = function (paciente, frmDatosPersonales) {

            //$scope.actualizarAntecedentes(padecimiento_actual, respiratorias, gastrointestinales, tratamientoActual, desparacitaciones, cirugias, diabetes, hipertension, ecv, dislipidemias, acido, cancer, calculo, otro, frmAnteceddentes);
            
            Expedientes.actualizarDatosP(paciente).then(function () {

                
                
                frmDatosPersonales.autoValidateFormOptions.resetForm();

                window.location.reload();

            });

        };

        $scope.actualizarAntecedentes = function (padecimiento_actual, respiratorias, gastrointestinales, tratamientoActual, desparacitaciones, cirugias, diabetes, hipertension, ecv, dislipidemias, acido, cancer, calculo, otro, frmAnteceddentes) {
            

            personales = {padecimiento_actual, respiratorias, gastrointestinales, tratamientoActual, desparacitaciones, cirugias, diabetes, hipertension, ecv, dislipidemias, acido, cancer, calculo, otro};

            console.log(personales);

            Expedientes.actualizarAntecedentes(personales).then(function () {

                frmAnteceddentes.autoValidateFormOptions.resetForm();

                window.location.reload();

            });

        };

        $scope.actualizarSC = function (piel,ojos,boca,lengua,cabello,unas,articulacion,mareos,cabeza,alergias,intolerancia,aversion,gustos,frmSignosClinicos) {
            

            sc = {piel,ojos,boca,lengua,cabello,unas,articulacion,mareos,cabeza,alergias,intolerancia,aversion,gustos};

            

            Expedientes.actualizarSignos(sc).then(function () {

                frmSignosClinicos.autoValidateFormOptions.resetForm();

                window.location.reload();

            });

        };


        $scope.guardarAsignacion = function (frutas,verduras,cereales,lacteos,carnes,leguminosas,aceites,azucares,frmAsignacionGrupo) {
            
            sc = {frutas,verduras,cereales,lacteos,carnes,leguminosas,aceites,azucares};

            Expedientes.guardar_asignacion(sc).then(function () {

                frmAsignacionGrupo.autoValidateFormOptions.resetForm();

                window.location.reload();

            });

        };



        $scope.generarDistribucion = function (id) {

            Expedientes.generarDistribucion(id).then(function () {

                $scope.des  = Expedientes.desayuno;
                $scope.col1 = Expedientes.colacion1;
                $scope.com  = Expedientes.comida;
                $scope.col2 = Expedientes.colacion2;
                $scope.cen  = Expedientes.cena;

            });
        };




        $scope.MostrarB = function () {
            $scope.B = false;

        };


        $scope.MostrarDP = function () {

            
            $scope.DP = false;
        };


        $scope.MostrarA = function () {
            $scope.A = false;

        };

        $scope.MostrarSC = function () {
            $scope.SC = false;

        };

        $scope.MostrarAG = function () {
            $scope.AG = false;

        };



        $scope.recuperarExpediente(id);

        $scope.generar = function () {
            $scope.generarDistribucion(id);

        };

        

        
//console.log(id);



    }]);