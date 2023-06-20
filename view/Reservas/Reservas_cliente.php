<?php require_once('view/panel/header.php'); ?>

<main id="main-container">
<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">
      <a  style="color:gray;" href="javascript:history.back()">
            <div class="btn btn-lg btn-circle btn-alt-secondary mr-10 mb-10">
            <i class="fa fa-reply"></i>
            </div> 
            </a> Volver 
          
                       
     

    <div class="row">  
        <div class="col-md-6 col-xl-3">      
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-left ribbon-bottom">
                   <div class="text-center py-30">
                        <i class="fa fa-vcard fa-3x text-gray mb-15"></i>
                        <h4>Cliente Existente</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-6">

            <label class="col-lg-12 col-form-label" for="cliente_existente">Seleccione al cliente registrado <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="cliente_existente" name="cliente_existente" style="width: 100%;" data-placeholder="Digite el destino..">
                     <option value="">Selecione una opcion</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>                    
                    </select>
                    </div>
                    <br>
                    <div class="col-lg-8">
                    <a href="index.php?c=Reservas&a=view_servicios_reservas" class="btn btn-secondary min-width-125">
                        <i class="fa fa-arrow-circle-right">

                        </i> Continuar</a>
                    </div>
                    </div>
        </div>      
    </div>     
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>