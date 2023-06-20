<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">
          
        <div class="block block-themed">
            <div class="block-header bg-gd-sea">
                <h3 class="block-title">Registro del Cliente</h3>
            </div>
                               
        <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                                                                                 
            <form class="js-validation-bootstrap" action="index.php?c=Clientes&a=new_cliente" method="post">
            <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="fecha_creacion">Fecha de Creación</label>
                    <div class="col-lg-6">
                        <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion">
                    </div>
                </div>  

            
              <!--   <div class="form-group row">
                   
                    <label class="col-lg-4 col-form-label" for="val-username">Nombres <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Digite los nombres..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username ">Apellidos <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Digite los apellidos..">
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-email">Correo <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Digite el email..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-number">Cédula <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-number" name="val-number" placeholder="Ingrese el número de cédula..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-number">Telefono <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-number" name="val-number" placeholder="Ingrese el número celular o telefono">
                    </div>
                </div>   
                                                                            
                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-select2">Destino (Ciudad) <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Digite el destino..">
                     <option value="">Selecione una opcion</option>
                        <option value="html">Guayaquil</option>
                        <option value="css">Manibi</option>
                        <option value="javascript">Quito</option>                    
                    </select>
                    </div>
                </div> 
                                        
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-suggestions">Dirección <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="val-suggestions" name="val-suggestions" placeholder="Ingrese la dirección..">
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="fecha_creacion">Fecha de Creación <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion">
                    </div>
                </div>   -->
                
                <div class="row">
                            <div class="col-6">
                                 <div class="form-group">                                  
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="nombre" name="nombre">
                                        <label for="wizard-validation-material-firstname">Nombres</label>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-6">
                                <div class="form-group"> 
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="Apellido" name="Apellido">
                                        <label for="wizard-validation-material-lastname">Apellidos</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">               
                                <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="email" id="Correo" name="Correo">
                                                    <label for="wizard-validation-material-email">Correo</label>
                                                </div>
                                            </div>
                                </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="text" id="cedula" name="cedula">
                                                    <label for="wizard-validation-material-number">Cédula</label>
                                                </div>
                                            </div>
                                            </div>
                        </div>

                        <div class="row">
                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="text" id="telfono" name="telefono">
                                                    <label for="wizard-validation-material-numberT">Telefono</label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <select class="form-control" id="Ciudad_FK" name="Ciudad_FK" size="1">
                                                        <option> Seleccione una opcion</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">Guayaquil</option>
                                                        <option value="2">Quito</option>
                                                        <option value="3">Cuenca</option>
            
                                                    </select>
                                                    <label for="wizard-validation-material-skills">Destino</label>
                                                </div>
                                            </div>
                        </div>                    
                        </div>
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="text" id="Direccion" name="Direccion">
                                                    <label for="wizard-validation-material-location">Dirección</label>
                                                </div>
                                            </div>

                                            <!-- <div class="form-group ">
                                            <div class="form-material floating">
                                                <input class="form-control" type="date" id="wizard-validation-material-location" name="wizard-validation-material-location">
                                                <label for="wizard-validation-material-location">Fecha de Creación</label>
                    
                                            </div>                                           
                                             </div>  -->
                                            
<br>
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Continuar</button>
                    </div>
                </div>                                 
            </form> 


        
                

                  
                                <!-- END Form -->
                            
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>