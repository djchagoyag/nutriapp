<ol class="breadcrumb animated fadeIn  fast">
    <li class="breadcrumb-item"><a href="#/">Home </a></li>
    <li class="active text-warning"> / Pacientes / Expediente  </li>       
</ol>
<div class="col-sm-12 col-lg-12" >
    <div class="card card-warning card-outline card-tabs" >
        <div class="card-warning p-0 pt-1 border-bottom-0">

            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active text-success" id="datosPersonalesT" data-toggle="pill" href="#datosPersonales"  target="_self" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Expediente </a>
                </li>
            </ul>

        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- frm Datos Personales -->
                    <div class="card card-warning" id="datosPersonales "name="datosPersonales">
                        <div class="card-header">
                            <h3 class="card-title text-white">Datos Personales</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form"
                                  ng-submit="actualizarDP(datosPersonales, frmDatosPersonales)" 
                                  name="frmDatosPersonales"
                                  novalidate="novalidate">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control"  ng-model="datosPersonales.nombre">
                                        </div>

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Apellido Paterno</label>
                                            <input type="text" class="form-control" ng-model="datosPersonales.apellido_paterno">
                                        </div>

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Apellido Materno</label>
                                            <input type="text" class="form-control" ng-model="datosPersonales.apellido_materno">
                                        </div>

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Edad</label>
                                            <input type="number" class="form-control" ng-model="datosPersonales.edad">
                                        </div>

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Correo</label>
                                            <input type="email" class="form-control" ng-model="datosPersonales.email">
                                        </div>

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Celular</label>
                                            <input type="number"  minlength="10" maxlength="10" class="form-control" ng-model="datosPersonales.celular">
                                        </div>

                                        <div class="form-group" ng-click="MostrarDP()">
                                            <label>Estatura</label>
                                            <input type="number"  class="form-control" ng-model="datosPersonales.estatura">
                                        </div>

                                       

                                        <div class="form-group" ng-click="MostrarDP()">

                                            <label class="text-secondary">Escolaridad</label>
                                                <select type="text" class="form-control" placeholder="Escolaridad"
                                                 ng-model="datosPersonales.escolaridad" required>
                                                    <option value="Educación Básica" selected>Educación Básica</option>
                                                    <option value="Educación Media Superior">Educación Media Superior</option>
                                                    <option value="Educación Superior">Educación Superior</option>
                                                    <option value="Ninguno">Ninguno</option>
                                                </select>
                                            </div>

                                            <div class="form-group" ng-click="MostrarDP()">

                                            <label class="text-secondary">Estado Civil</label>
                                                <select type="text" class="form-control" placeholder="Estatura"
                                                    ng-model="datosPersonales.estado_civil" required>
                                                    <option value="Soltero" selected>Soltero</option>
                                                    <option value="Casado">Casado</option>
                                                    <option value="Divorciado">Divorciado</option>
                                                </select>
                                            </div>   

                                         <br>


                                    </div>


                                    <div class="form-group" ng-hide="DP">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save "></i> Actualizar</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!--==== Formulario Antropometria====-->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title text-white">Antropometria</h3>
                        </div>

                        <div class="card-body">
                            <form role="form" name="frmAsignacion"
                                  ng-submit="guardr(asignacion, frmAsignacion)"
                                  novalidate="novalidate">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- Antropometria Inicial -->
                                        <div class="form-group">
                                            <h4 class="text-warning">Antropometria </h4>
                                        </div>

                                        <div class="row">               

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Peso</label>
                                                    <input type="text" class="form-control" placeholder="Kg" ng-model="asignacion.peso" required>
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">



                                            </div>
                                        </div>



                                        <div class="row">               

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Presión</label>
                                                    <input type="text" class="form-control" placeholder="mmHg" ng-model="asignacion.presion"  pattern="[0-9]*[/][0-9]*" required>
                                                </div>
 

                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Pulso</label>
                                                    <input type="text" class="form-control" placeholder="por minuto" ng-model="asignacion.pulso" required>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row">               
                                            <div class="col-sm-6">



                                            </div> 

                                            <div class="col-sm-6">



                                            </div>
                                        </div>

                                        <!-- tanita-->
                                        <div class="form-group">
                                            <h4 class="text-warning">Tanita</h4>
                                        </div>

                                        <div class="row">               
                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>%GCT</label>
                                                    <input type="text" class="form-control" placeholder="porcentaje" ng-model="asignacion.gct" required>
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Edad Metabolica</label>
                                                    <input type="text" class="form-control" placeholder="años" ng-model="asignacion.edad_metabolica" required>
                                                </div>


                                            </div>
                                        </div>


                                        <div class="row">               
                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>%Musculo</label>
                                                    <input type="text" class="form-control" placeholder="porcentaje" ng-model="asignacion.porciento_musculo" required>
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Ingesta Estimada</label>
                                                    <input type="text" class="form-control" placeholder="kcal" ng-model="asignacion.kilocalorias" required>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row">               
                                            <div class="col-sm-6" ng-click="MostrarA()">
                                                <div class="form-group">
                                                    <label>Grasa Visceral</label>
                                                    <input type="text" class="form-control" placeholder="porcentaje" ng-model="asignacion.grasa" required>
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group">


                                                </div>

                                            </div>
                                        </div>
                                        <!--- Circunferencias-->

                                        <div class="form-group">
                                            <h4 class="text-warning">Circunferencias</h4>
                                        </div>

                                        <div class="row">               

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Cintura</label>
                                                    <input type="text" class="form-control" placeholder="cm" ng-model="asignacion.cintura" required>
                                                </div>                                
                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Cadera</label>
                                                    <input type="text" class="form-control" placeholder="cm" ng-model="asignacion.cadera" required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">               

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarA()">
                                                    <label>Muñeca</label>
                                                    <input type="text" class="form-control" placeholder="cm" ng-model="asignacion.muneca" required>
                                                </div>                                
                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label>Complexión</label>
                                                    <input type="text" class="form-control" placeholder="cm" ng-model="asignacion.complexion" required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">               
                                            

                                            <div class="col-sm-6">

                                                <div class="form-group">




                                                    <div class="form-group" ng-click="MostrarA()">
                                                        <label>Morfología</label>
                                                        <select class="form-control" ng-model="asignacion.morfologia" required>
                                                            <option value="1">Androide</option>
                                                            <option value="2">Ginecoide</option>
                                                            <option value="3">Normal</option>                       
                                                        </select>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group" ng-hide="A">
                                            <button type="submit" class="btn btn-success float-right"><i class="fa fa-save "></i> Guardar Seguimiento</button>
                                        </div>








                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                    <!--=====Fin Antropometria====-->

                    <!--==== Plan Alimentario ====-->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title text-white">Plan Alimentario</h3>
                        </div>

                        <div class="card-body">
                            <form role="form" name="frmAsignacionGrupo" novalidate="novalidate"
                                  ng-submit="guardarAsignacion(frutas, verduras, cereales, lacteos, carnes, leguminosas, aceites, azucares, frmAsignacionGrupo)">
                                <div class="row">
                                    <div class="col-sm-12">


                                        <div class="row">               
                                            <div class="col-sm-6" ng-click="MostrarAG()">
                                                <div class="form-group">
                                                    <label>Frutas</label>
                                                    <input type="number" class="form-control" placeholder="Cantidad" ng-model="frutas">
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarAG()">
                                                    <label>Verduras</label>
                                                    <input type="number"  class="form-control" placeholder="Cantidad" ng-model="verduras">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row">               
                                            <div class="col-sm-6" ng-click="MostrarAG()">
                                                <div class="form-group">
                                                    <label>Cereales y Tuberculos </label>
                                                    <input type="number"  class="form-control" placeholder="Cantidad" ng-model="cereales" >
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarAG()">
                                                    <label>Lacteos</label>
                                                    <input type="number" class="form-control" placeholder="Cantidad" ng-model="lacteos">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row">               
                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarAG()">
                                                    <label>Carnes</label>
                                                    <input type="number"  class="form-control" placeholder="Cantidad" ng-model="carnes">
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarAG()">
                                                    <label>Leguminosas</label>
                                                    <input type="number" minlength="1" maxlength="2" class="form-control" placeholder="Cantidad" ng-model="leguminosas">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row">               
                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarAG()">
                                                    <label>Aceites y Grasas</label>
                                                    <input type="number" minlength="1" maxlength="2" class="form-control" placeholder="Cantidad" ng-model="aceites">
                                                </div>


                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarAG()">
                                                    <label>Azucares</label>
                                                    <input type="number" minlength="1" maxlength="2" class="form-control" placeholder="Cantidad" ng-model="azucares">
                                                </div>


                                            </div>
                                        </div>


                                        <div class="form-group" ng-hide="AG">
                                            <button type="submit" class="btn btn-success float-right"><i class="fa fa-save "></i> Asignar Grupo Alimenticio </button>
                                        </div>




                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                    <!--=====Plan Alimentario===-->
                </div>
                <!--===Fin del lado derecho ==-->
                <!--Antecedentes, Signos Clinicos-->        
                <div class="col-md-6">
                    <div class="card card-warning" id="antecedentes">

                        <div class="card-header">
                            <h3 class="card-title  text-white">Antecedentes, Signos Clinicos</h3>
                        </div>

                        <div class="card-body">
                            <form role="form"  name="frmAnteceddentes"
                                  novalidate="novalidate" ng-submit="actualizarAntecedentes(padecimiento_actual, respiratorias, gastrointestinales, tratamientoActual, desparacitaciones, cirugias, diabetes, hipertension, ecv, dislipidemias, acido, cancer, calculo, otro, frmAnteceddentes)">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <!--Antecedentes Personales-->
                                        <div class="form-group">
                                            <h4 class="text-warning"> Antecedentes Personales</h4>

                                        </div>


                                        <div class="form-group" ng-click="MostrarB()">
                                            <label>Padecimiento Actual</label>
                                            <input type="text" class="form-control" ng-model="padecimiento_actual.sintoma">
                                        </div>

                                        <div class="form-group">
                                            <label class="text-dark"> Enfermedades Recurrentes</label>
                                        </div>
                                        <div class="row">               
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label class="text-secondary">Respiratorias</label>
                                                    <select type="text" class="form-control " placeholder="Sexo"
                                                            ng-model="respiratorias.opcion">
                                                        <option value="1">1-2 veces</option>
                                                        <option value="2">+ 2 veces</option>

                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label class="text-secondary">Gastrointestinales</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="gastrointestinales.opcion">
                                                        <option value="1">1-2 veces</option>
                                                        <option value="2">+ 2 veces</option>

                                                    </select>
                                                </div>   
                                            </div>
                                        </div>

                                        <div class="form-group" ng-click="MostrarB()">
                                            <label>Tratamineto Actual</label>
                                            <input type="text" class="form-control" ng-model="tratamientoActual.sintoma">
                                        </div>

                                        <div class="form-group">
                                            <p> Enfermedades Recurrentes</p>
                                        </div>
                                        <div class="row">               

                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Desparacitaciones</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="desparacitaciones.opcion">
                                                        <option value="1">6 meses</option>
                                                        <option value="2">+ 6 meses</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Cirugías</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="cirugias.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>   
                                            </div>

                                        </div> 
                                        <!-- Fin Antecedentes Personales-->

                                        <!--Antecedentes Familiares-->
                                        <br>
                                        <div class="form-group">
                                            <h4 class="text-warning"> Antecedentes Familiares</h4>
                                            <br>
                                        </div>

                                        <!-- -> Antededente-->        
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Diabetes</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="diabetes.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="diabetes.familiar">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Fin antecedentes -->
                                        <!-- -> Antecedente-->        
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Hipertensión Arterial</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="hipertension.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="hipertension.familiar">
                                                </div>

                                            </div>
                                        </div>


                                        <!-- Fin antecedentes --> 
                                        <!-- -> Antecedente-->        

                                        <!-- Fin antecedentes --> 
                                        <!-- -> Antecedente-->
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>ECV</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="ecv.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="ecv.familiar">
                                                </div>

                                            </div>
                                        </div>


                                        <!-- Antecedente ---->

                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Dislipidemias</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="dislipidemias.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="dislipidemias.familiar">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Fin antecedentes --> 
                                        <!-- -> Antecedente-->        
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Ácido Úrico</label>
                                                    <select type="text" class="form-control" placeholder="Sexo"
                                                            ng-model="acido.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="acido.familiar">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Fin antecedentes --> 
                                        <!-- -> Antecedente-->        
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Cáncer</label>
                                                    <select type="text" class="form-control" placeholder="Cancer"
                                                            ng-model="cancer.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="cancer.familiar">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Fin antecedentes --> 
                                        <!-- -> Antecedente-->        
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Calculos (renales/ biliales)</label>
                                                    <select type="text" class="form-control" placeholder="Calculos"
                                                            ng-model="calculo.opcion">
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>                
                                                    </select>
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="calculo.familiar">
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Fin antecedentes --> 
                                        <!-- -> Antecedente-->        
                                        <div class="row">                
                                            <div class="col-sm-6">   

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>Otro</label>
                                                    <input type="text" class="form-control" placeholder="Signo Clinico" ng-model="otro.opcion">
                                                </div>                  

                                            </div> 

                                            <div class="col-sm-6">

                                                <div class="form-group" ng-click="MostrarB()">
                                                    <label>¿Quién?</label>
                                                    <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="otro.familiar">
                                                </div>

                                                <br>
                                            </div>

                                        </div>
                                        <!-- Fin antecedentes --> 

                                        <!-- Fin Antecedentes Familiares-->
                                        <div class="form-group" ng-hide="B">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save "></i> Actualizar</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>  
                    <!-- /.card -->

                    <!--==== Signos Clinicos====-->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title text-white">Signos Clinicos</h3>
                        </div>

                        <div class="card-body">
                            <form role="form" name="frmSignosClinicos"
                                  novalidate="novalidate" ng-submit="actualizarSC(piel, ojos, boca, lengua, cabello, unas, articulacion, mareos, cabeza, alergias, intolerancia, aversion, gustos, frmSignosClinicos)">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="row"> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarSC()">
                                                    <label>Piel</label>
                                                    <select class="form-control" ng-model="piel.nivel">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Leve</option>
                                                        <option value="3">Moderado</option>
                                                        <option value="4">Grave</option>
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarSC()">
                                                    <label>Ojos</label>
                                                    <select class="form-control" ng-model="ojos.nivel">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Leve</option>
                                                        <option value="3">Moderado</option>
                                                        <option value="4">Grave</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarSC()">
                                                    <label>Boca</label>
                                                    <select class="form-control"  ng-model="boca.nivel">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Leve</option>
                                                        <option value="3">Moderado</option>
                                                        <option value="4">Grave</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarSC()">
                                                    <label>Lengua</label>
                                                    <select class="form-control"  ng-model="lengua.nivel">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Leve</option>
                                                        <option value="3">Moderado</option>
                                                        <option value="4">Grave</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarSC()">
                                                    <label>Cabello</label>
                                                    <select class="form-control" ng-model="cabello.nivel">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Leve</option>
                                                        <option value="3">Moderado</option>
                                                        <option value="4">Grave</option>
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="col-sm-6">
                                                <div class="form-group" ng-click="MostrarSC()" >
                                                    <label>Uñas</label>
                                                    <select class="form-control" ng-model="unas.nivel">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Leve</option>
                                                        <option value="3">Moderado</option>
                                                        <option value="4">Grave</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                </div>
                                <div class="row">                
                                    <div class="col-sm-6">   

                                        <div class="form-group" ng-click="MostrarSC()">
                                            <label>Articulaciones</label>
                                            <select type="text" class="form-control" placeholder="Sexo"
                                                    ng-model="articulacion.nivel">
                                                <option value="1">Si</option>
                                                <option value="2">No</option>                
                                            </select>
                                        </div>                  

                                    </div> 

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>¿Donde?</label>
                                            <input type="text" class="form-control" placeholder="Familiar Directo" ng-model="articulacion.sintoma">
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mareos</label ng-click="MostrarSC()">
                                            <select class="form-control" ng-model="mareos.nivel">
                                                <option value="1">Normal</option>
                                                <option value="2">Leve</option>
                                                <option value="3">Moderado</option>
                                                <option value="4">Grave</option>
                                            </select>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="form-group" ng-click="MostrarSC()">
                                            <label>Dolor de Cabeza</label>
                                            <select class="form-control" ng-model="cabeza.nivel">
                                                <option value="1">Normal</option>
                                                <option value="2">Leve</option>
                                                <option value="3">Moderado</option>
                                                <option value="4">Grave</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>

                                <div class="col-sm-12">

                                    <div class="form-group" ng-click="MostrarSC()">
                                        <label>Alergias</label>
                                        <input type="text" class="form-control"  placeholder="alergías" ng-model="alergias.sintoma">
                                    </div>

                                    <div class="form-group" ng-click="MostrarSC()">
                                        <label>Intolerancia</label>
                                        <input type="text" class="form-control" placeholder="intolerancia" ng-model="intolerancia.sintoma">
                                    </div>

                                    <div class="form-group" ng-click="MostrarSC()">
                                        <label>Aversión</label>
                                        <input type="text" class="form-control" placeholder="aversión" ng-model="aversion.sintoma">
                                    </div>

                                    <div class="form-group" ng-click="MostrarSC()">
                                        <label>Gusto</label>
                                        <input type="text" class="form-control" placeholder="gustos" ng-model="gustos.sintoma">
                                    </div>
                                    <br>

                                </div>


                                <div class="form-group" ng-hide="SC">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save "></i> Actualizar</button>
                                </div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>  
            <!--=====Plan Alimentario===-->




            <!-- Para cada Formulario  
           
               <div class="card card-success">
                         <div class="card-header">
                           <h3 class="card-title">Estilo de Vida</h3>
                       </div>
                         
                         <div class="card-body">
                         <form role="form">
                         <div class="row">
                         <div class="col-sm-12">
           
                         </div>
                         </div>
                         </form>
                         </div>
               </div>  
           
            -->

            <div  class="card card-primary">
                <div id="asig" class="card-header">
                    <h3 class="card-title text-white">Ultima Asignacion de Alimentos</h3>
                </div>

                <div class="card-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-12">

                                <table class="table table-responsive p-0"  >
                                    <thead>
                                        <tr>
                                            <th class= "text-primary">Frutas</th>
                                            <th class= "text-primary">Verduras</th>
                                            <th class= "text-primary">Cereales</th>
                                            <th class= "text-primary">Lacteos</th>
                                            <th class= "text-primary">Carnes</th>
                                            <th class= "text-primary">Leguminosas</th>
                                            <th class= "text-primary">Aceites</th>
                                            <th class= "text-primary">Azucares</th>

                                        </tr> 
                                    </thead>
                                    <tbody >

                                        <tr ng-repeat="asignacion in asignacion" >
                                            <td>{{asignacion.frutas}}</td>
                                            <td>{{asignacion.verduras}}</td>
                                            <td>{{asignacion.cereales}}</td>
                                            <td>{{asignacion.lacteos}}</td>
                                            <td>{{asignacion.carnes}}</td>
                                            <td>{{asignacion.leguminosas}}</td>
                                            <td>{{asignacion.aceites}}</td>
                                            <td>{{asignacion.azucares}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
            <!--==== Formula Distribución Alimentos ====-->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title text-white">Sugerencia de Distribución de Alimentos</h3>  

                    <a ng-click="generar()" class="btn btn-light float-right text-success"><i class="fas fa-apple-alt"></i> Generar Distribución</a>
                              
                </div>


                <div class="card-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card-body">
                                    <table class="table table-responsive p-0">
                                        <thead>
                                            <tr>
                                                <th class= "text-success">Comida</th>
                                                <th class= "text-success">Frutas</th>
                                                <th class= "text-success">Verduras</th>
                                                <th class= "text-success">Cereales y Tuberculos</th>
                                                <th class= "text-success">Lacteos</th>
                                                <th class= "text-success">Leguminosas</th>
                                                <th class= "text-success">Aceites y Grasas</th>
                                                <th class= "text-success">Azucares</th>
                                                <th class= "text-success">Carnes</th>
                                            </tr> 
                                        </thead>
                                        <tbody >
                                            <tr >
                                                <td class= "text-success">Desayuno</td>
                                                <td>{{des.frutas}}</td>
                                                <td>{{des.verduras}}</td>
                                                <td>{{des.cereales}}</td>
                                                <td>{{des.lacteos}}</td>
                                                <td>{{des.leguminosas}}</td>
                                                <td>{{des.aceites}}</td>
                                                <td>{{des.azucares}}</td>
                                                <td>{{des.carnes}}</td>                  
                                            </tr>
                                            <tr>
                                                <td class= "text-success">Colación</td>
                                                <td>{{col1.frutas}}</td>
                                                <td>{{col1.verduras}}</td>
                                                <td>{{col1.cereales}}</td>
                                                <td>{{col1.lacteos}}</td>
                                                <td>{{col1.leguminosas}}</td>
                                                <td>{{col1.aceites}}</td>
                                                <td>{{col1.azucares}}</td>
                                                <td>{{col1.carnes}}</td>                 
                                            </tr>
                                            <tr>
                                                <td class= "text-success">Comida</td>
                                                <td>{{com.frutas}}</td>
                                                <td>{{com.verduras}}</td>
                                                <td>{{com.cereales}}</td>
                                                <td>{{com.lacteos}}</td>
                                                <td>{{com.leguminosas}}</td>
                                                <td>{{com.aceites}}</td>
                                                <td>{{com.azucares}}</td>
                                                <td>{{com.carnes}}</td>                
                                            </tr>
                                            <tr>
                                                <td class= "text-success">Colación</td>
                                                <td>{{col2.frutas}}</td>
                                                <td>{{col2.verduras}}</td>
                                                <td>{{col2.cereales}}</td>
                                                <td>{{col2.lacteos}}</td>
                                                <td>{{col2.leguminosas}}</td>
                                                <td>{{col2.aceites}}</td>
                                                <td>{{col2.azucares}}</td>
                                                <td>{{col2.carnes}}</td>                 
                                            </tr>
                                            <tr>
                                                <td class= "text-success">Cena</td>
                                                <td>{{cen.frutas}}</td>
                                                <td>{{cen.verduras}}</td>
                                                <td>{{cen.cereales}}</td>
                                                <td>{{cen.lacteos}}</td>
                                                <td>{{cen.leguminosas}}</td>
                                                <td>{{cen.aceites}}</td>
                                                <td>{{cen.azucares}}</td>
                                                <td>{{cen.carnes}}</td>                 
                                            </tr>


                                        </tbody>
                                    </table>

                                </div> 
                         </div>
                        </div>
                    </form>
                </div>
            </div>  

            <!--==== Formula Seguimiento ====-->
            <div  class="card card-primary">
                <div id="seguimiento" class="card-header">
                    <h3 class="card-title text-white">Seguimiento</h3>
                </div>
                <div class="card-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-responsive p-0"  >
                                    <thead>
                                        <tr>
                                            <th class= "text-primary">Fecha</th>
                                            <th class= "text-primary">Cintura</th>                                     
                                            <th class= "text-primary">Peso Total</th>
                                            <th class= "text-primary">IMC</th>
                                            <th class= "text-primary">GCT</th>
                                            <th class= "text-primary">%Musculo</th>
                                            <th class= "text-primary">KCAL</th>
                                            <th class= "text-primary">Edad Metabolica</th>
                                            <th class= "text-primary">Grasa Visceral</th>
                                            <th class= "text-primary">T/A</th>
                                            <th class= "text-primary">Pulso</th>
                                        </tr> 
                                    </thead>
                                    <tbody >

                                        <tr ng-repeat="histIndicadores in histIndicadores" >
                                            <td>{{histIndicadores.fecha}}</td>
                                            <td>{{histIndicadores.cintura}}</td>                                     
                                            <td>{{histIndicadores.peso}}</td>
                                            <td>{{histIndicadores.imc}}</td>
                                            <td>{{histIndicadores.gct_kilogramos}}</td>
                                            <td>{{histIndicadores.musculo_porciento}}</td>
                                            <td>{{histIndicadores.kilocalorias}}</td>
                                            <td>{{histIndicadores.edad_metabolica}}</td>
                                            <td>{{histIndicadores.grasa_visceral}}</td>
                                            <td>{{histIndicadores.presion}}</td>
                                            <td>{{histIndicadores.pulso}}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
            <!--=====Fin Seguimiento====-->
