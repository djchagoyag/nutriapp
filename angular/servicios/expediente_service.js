var app = angular.module('nutriapp.expediente',[]);

app.factory('Expedientes',['$http','$q', function($http,$q){

	 var self ={

	 	guardar: function(asignacion){

			var d = $q.defer();

			$http.post('PHP/DAO/guardarAsignacion.php',asignacion )
				.success(function(respuesta){

					console.log(respuesta);
					d.resolve();

				});

			return d.promise;

		},
		actualizarDatosP: function(paciente){

			var d = $q.defer();

			$http.post('PHP/DAO/actualizar_expediente.php',paciente)
				.success(function(respuesta){

					console.log(respuesta);
					d.resolve();

				});

			return d.promise;

		},
		actualizarAntecedentes: function(antecedentes){

			var d = $q.defer();

			console.log(antecedentes);
			$http.post('PHP/DAO/actualizarAntecedentes.php',antecedentes)
				.success(function(respuesta){


					d.resolve();

				});

			return d.promise;

		},
		actualizarSignos: function(signos){

			var d = $q.defer();

			$http.post('PHP/DAO/actualizar_signos.php',signos)
				.success(function(respuesta){


					d.resolve();

				});

			return d.promise;

		},
		guardar_asignacion: function(asignacion){

			var d = $q.defer();

			$http.post('PHP/DAO/guardar_asignacion_grupo.php',asignacion)
				.success(function(respuesta){

					console.log(respuesta);
					d.resolve();

				});

			return d.promise;

		},

		generarDistribucion: function(id){

	 		var d = $q.defer();

			$http.get('PHP/DAO/distribucion.php?id='+id)
				.success(function(dist){
				
					self.desayuno 				=	 dist.desayuno;
					self.colacion1 				=	 dist.colacion1;
					self.comida 				=	 dist.comida;
					self.colacion2 				=	 dist.colacion2;
					self.cena 					=	 dist.cena;
					
					d.resolve();

				});

			return d.promise;

	 	},

	 	recuperarExpediente: function(id){

	 		var d = $q.defer();

			$http.get('PHP/DAO/cargarExpediente.php?id='+id)
				.success(function(exp){
				
					self.datosPersonales 				=	 exp.datosPersonales;
					self.antecedentes_personales 		= 	 exp.antecedentes_personales;
					self.antecedentes_familiares 		= 	 exp.antecedentes_familiares;
					self.signos_clinicos				= 	 exp.signos_clinicos;
					self.historial_indicadores			=	 exp.historial_indicadores;
					self.asignacionGrupo 				=	 exp.asignacionGrupo;

					d.resolve();

				});

			return d.promise;

	 	}


	 };

	 return self;

}]);