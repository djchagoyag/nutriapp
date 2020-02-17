var app = angular.module('nutriapp.configuracion',[]);


app.factory('Configuracion', ['$http','$q',function ($http,$q) {


	var self = {

			config :{},
			pac :{},
			cargar : function(){
				var d = $q.defer();

				$http.get('configuracion.json')
				.success(function(data){

					self.config= data;
					d.resolve();

				})
				.error(function(){

					d.reject();

					console.log("No se pudo cargar el archivo de configuracion");


				})

				return d.promise ;

			},
	};


	

	return self;

	
}])