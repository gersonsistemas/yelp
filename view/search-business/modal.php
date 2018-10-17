<div class="modal inmodal fade" id="search" tabindex="-1" role="dialog" aria-hidden="true">
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
                <div class="col-md-8">
                    <p>Search Latitude - Longitude</p>
                    <?php include('../api/google-maps-api.php');?>
                    
                </div>



                <div class="col-md-4">

                    <p>(*) Required</p>

                    <form role="form" action="search-business" method="post" name="formulario">
                                  
                        <div class="form-group col-md-12">
                            <label>Latitude(*)</label> 
                        </div>

                        <div class="form-group col-md-12">  
                            <input type="text" name="latitude" class="form-control" value="<?php echo "$_POST[latitude]";  ?>" required>
                        </div>

                        <div class="form-group col-md-12"> 
                            <label>Longitude(*)</label>           
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" name="longitude" class="form-control" value="<?php echo "$_POST[longitude]";  ?>" required>
                        </div>    

                        <div class="form-group col-md-12">    
                            <label>Radius(*)</label>           
                        </div>

                        <div class="form-group col-md-12">  
                            <input type="text" name="radius" class="form-control" value="500" required>
                        </div>    

                        <div class="form-group col-md-12">
                        <input type="hidden" name="id_city" value="<?php echo "$_POST[id_city]";  ?>">
                        <input type="hidden" name="info_city" value="<?php echo "$_POST[info_city]";  ?>">
                
                        <input type="submit" name="search-business" class="btn btn-primary col-md-12" value="Search">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
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