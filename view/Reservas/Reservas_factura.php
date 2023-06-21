<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">
          
                    
                    <h2 class=" text-center">Factura de reserva</h2>
                                
            <form class="js-validation-bootstrap" action="#" method="post">

                                                                                 
           
                
            <div class="row row-deck gutters-tiny">
                        <!-- Billing Address -->
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Datos del cliente</h3>
                                </div>
                                <div class="block-content">
                                    <div class="font-size-lg text-black mb-5">John Smith</div>
                                    <address>
                                        5110 8th Ave<br>
                                        New York 11220<br>
                                        United States<br><br>                                    
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- END Billing Address -->

                        <!-- Shipping Address -->
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h5 class="block-title fw-bold">Datos del Agente</h5>
                                </div>
                                <div class="block-content">
                                    <div class="font-size-lg text-black mb-5"><strong class="fw-bold">Nombre:</strong> <?php echo $_SESSION['agente'];?></div>
                                    <div class="font-size-lg text-black mb-5"><strong class="fw-bold">Apellido:</strong> <?php echo $_SESSION['apellido'];?></div>
                                    <div class="font-size-lg text-black mb-5"><strong class="fw-bold">Correo:</strong> <?php echo $_SESSION['user'];?></div>
                                   
                                    
                                </div>
                            </div>
                        </div>
            
              </div>

              <div class="row row-deck gutters-tiny">
                        <!-- Billing Address -->
                        <div class="col-md-12">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Detalles de la reserva</h3>
                                </div>
                                <div class="block-content">
                                    <div class="font-size-lg text-black mb-5">hotel</div>
                                    <address>
                                        Precio --------<br>
                                        SubTotal ------<br>
                                        Total  --------<br>
                          
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- END Billing Address -->
                 
            
              </div>
            
            
             

                 
              
                <div class="col-xl-6">
                        <button type="submit" class="btn btn-square btn-info min-width-125 mb-10">Generar</button>
                    </div>
                 

            </form>               
          <!-- END Form -->
                            
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>