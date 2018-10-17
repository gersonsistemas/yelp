<div class="modal inmodal fade" id="search" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="search-business" method="post" name="formulario">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Search Business</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="form-group col-md-5">
                        
                    <label>Latitude(*)</label>
                    
                    
                    <div class="input-group date">
                            
                        <input type="text" name="latitude" class="form-control" value="<?php echo "$_POST[latitude]";  ?>" required>
                    </div>
                    
                </div>
                    
                <div class="form-group col-md-5">
                        
                    <label>Longitude(*)</label>
                    
                    
                    <div class="input-group date">
                        
                        <input type="text" name="longitude" class="form-control" value="<?php echo "$_POST[longitude]";  ?>" required>
                    </div>               
                </div>

                <div class="form-group col-md-2">
                        
                    <label>Radius(*)</label>
                    
                    
                    <div class="input-group date">
                        
                        <input type="text" name="radius" class="form-control" value="300" required>
                    </div>               
                </div>

                <?php include('../api/google-maps-api.php');?>



                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">

                <input type="hidden" name="id_city" value="<?php echo "$_POST[id_city]";  ?>">
                <input type="hidden" name="info_city" value="<?php echo "$_POST[info_city]";  ?>">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="search-business" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>






<div class="modal inmodal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="search-business" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Delete Business</h4>
                <small class="font-bold">Delete all business.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Delete all business and reviews in city <?php echo "$_POST[info_city]";?>?</h3>
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
                <input type="hidden" name="id_city" value="<?php echo "$_POST[id_city]";  ?>">
                <input type="hidden" name="info_city" value="<?php echo "$_POST[info_city]";  ?>">
                <input type="hidden" name="longitude" value="<?php echo "$_POST[longitude]";  ?>">
                <input type="hidden" name="latitude" value="<?php echo "$_POST[latitude]";  ?>">
                <input type="hidden" name="delete" value="valor">
            
            <input type="submit" name="deleteAllBusinessInCity" class="btn btn-danger" value="Delete">
            </div>
            
        </div>
    </div>
</form>
</div>