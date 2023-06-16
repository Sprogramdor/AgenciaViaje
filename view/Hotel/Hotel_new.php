<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de Inventarios</h2>
    <div class="row">
      <div class="col-xl-12">
          
        <div class="block block-themed">
            <div class="block-header bg-gd-flat">
                <h3 class="block-title">Formulario de registro del hotel</h3>

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
                   
                    <label class="col-lg-4 col-form-label" for="val-username">Nombre del Hotel <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nombre_hotel" name="nombre_hotel" placeholder="Digite los nombres del hotel..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-email">Valoración <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="valoracion" name="valoracion" placeholder="Digite la valoración..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username ">Dirección <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Digite la dirección..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-number">Precio <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="num" class="form-control" id="precio_hotel" name="precio_hotel" placeholder="Ingrese el precio del hotel">
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