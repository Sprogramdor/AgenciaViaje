<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de Inventarios</h2>
    <div class="row">
      <div class="col-xl-12">
          
        <div class="block block-themed">
            <div class="block-header bg-pulse-light">
                <h3 class="block-title">Formulario de registro del paquetes</h3>

                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
                               
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                       <!--  <h2 class="block-title mb-3" style="font-weight:bold;">Registro del Cliente</h2> -->
                               
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-bootstrap" action="#" method="post">

                <div class="form-group row">
                   
                    <label class="col-lg-4 col-form-label" for="val-username">Detalle <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Digite el detalle..">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-select2">Vuelo<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" >
                     <option value="">Selecione una opcion</option>
                        <option value="html">1</option>
                        <option value="css">2</option>
                        <option value="javascript">3</option>                    
                    </select>
                    </div>
                </div> 
                  
                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-select2">Hotel<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" >
                     <option value="">Selecione una opcion</option>
                        <option value="html">1</option>
                        <option value="css">2</option>
                        <option value="javascript">3</option>                    
                    </select>
                    </div>
                </div> 
                
             

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-number">Precio <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="num" class="form-control" id="precio_hotel" name="precio_hotel" placeholder="Ingrese el precio del paquete..">
                    </div>
                </div>   
                                                                            
                
                                        
                        
                                        
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Guardar</button>
                    </div>
                </div>
                                    
            </form>

            </div>
            </div>
            </div>
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>