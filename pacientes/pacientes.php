<ol class="breadcrumb animated fadeIn  fast">
    <li class="breadcrumb-item text-warning"><a href="#/">Home </a></li>
    <li class="active text-warning"> / Pacientes</li>       
</ol>
<div class= "row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <h1 class="card-title text-success">Pacientes</h1>

                <div class="card-body">

                    

                </div>
                <div class="card-body">

                    <form role="form"
                          ng-submit="moverBusqueda(1,nombre)" 
                          name="frmBuscar"
                          novalidate="novalidate">

                        <div class="form-group">
                            <label class="text-success">Buscar</label>
                            <input type="text" class="form-control border border-success text-warning" placeholder="Nombre Paciente" ng-model="nombre">
                        </div>

                    </form>

                    <form role="form"
                          ng-submit="" 
                          name="Ordenar"
                          novalidate="novalidate">

                        <div class="form-group" ng-click="MostrarA() ">
                            <label class="text-success">Ordenar</label>
                            <select class="form-control border border-success text-warning " style="width:260px">
                                <option  ng-click="moverA(1)"value="0" selected></option>
                                <option ng-click="moverNombre(1)" value="1">Ordenado de A - Z</option>
                                <option ng-click="moverNombreDesc(1)"value="2">Ordenado de Z - A</option>                
                            </select>

                        <a ng-click="mostrarModal({})"class="btn btn-success float-right text-white"><i class="fa fa-user-plus"></i>Agregar Paciente</a>
                        

                        </div>
                        
                    </form>



                </div>
                <!-- /.card-body -->
            </div>


            <div class="card-body ">
                <table class="table table-responsive p-0 ">
                    <thead >
                        <tr >
                            <th ></th>
                            <th class="text-warning ">Nombre</th>
                            <th class="text-warning">Apellido Paterno</th>
                            <th class="text-warning">Apellido Materno</th>
                            <th class="text-warning">Edad</th>
                            <th class="text-warning">Email</th>
                            <th class="text-warning">Celular</th>
                            <th class="text-warning">Estatura</th>
                            <th class="text-warning">Expediente</th>
                        </tr>   
                    </thead>
                    <tbody >
                        <tr ng-repeat="pacientes in pacientes" >
                            <td name="usuario"></td>
                            <td>{{ pacientes.nombre}}</td>
                            <td>{{ pacientes.apellido_materno}}</td>
                            <td>{{ pacientes.apellido_paterno}}</td>
                            <td>{{ pacientes.edad}}</td>
                            <td >{{ pacientes.email}}</td>
                            <td>{{ pacientes.celular}}</td>
                            <td>{{ pacientes.estatura}}</td>
                            <td ng-class="mExpediente">
                                <a  href="#/expediente/{{pacientes.id}}"  class ="btn btn-info text-white"><i class="fa fa-clipboard"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div> 

            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm no-margin float-right">

                    <li class="page-item "><a class="page-link" ng-click="moverA(1)">«</a></li>

                    <li ng-repeat ="pag in numPaginas" ng-class="{'active': paginacion.pag_actual === pag}" class="page-item">

                        <a class="page-link" ng-click="moverA(pag)"> {{pag}} </a>

                    </li>

                    <li class="page-item"><a class="page-link" ng-click="moverA(paginacion.total_paginas)">»</a></li>
                </ul>
            </div>


        </div>
    </div>
</div>
</div> 

<div ng-include="'template/modal_pacientes.html'" ></div>  