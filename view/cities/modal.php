<div class="modal inmodal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="cities" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">New City</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label>Name City (*)</label>
                    <input type="text" class="form-control" name="name" value="" required autocomplete="off">
                </div>
                
                <div class="col-md-3 form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" value="" autocomplete="off">
                </div>

                <div class="col-md-3 form-group">
                    <label>ZIP Code</label>
                    <input type="text" class="form-control" name="zip_code" value="" required autocomplete="off">
                </div>

                <div class="col-md-6 form-group">
                    <label>Latitude</label>
                    <input type="text" class="form-control" name="latitude" value="" autocomplete="off">
                </div>

                <div class="col-md-6 form-group">
                    <label>Longitude</label>
                    <input type="text" class="form-control" name="longitude" value="" autocomplete="off">
                </div>

                
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                
                <input type="hidden" name="insert" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newCity" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<?php 

foreach($execute as $valoresmodal){
      
      echo'

<div class="modal inmodal fade" id="edit'.$valoresmodal[id].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="cities" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Edit City</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label>Name City (*)</label>
                    <input type="text" class="form-control" name="name" value="'.$valoresmodal[name].'" required autocomplete="off">
                </div>
                
                <div class="col-md-3 form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" value="'.$valoresmodal[country].'" autocomplete="off">
                </div>

                <div class="col-md-3 form-group">
                    <label>ZIP Code</label>
                    <input type="text" class="form-control" name="zip_code" value="'.$valoresmodal[zip_code].'" required nautocomplete="off">
                </div>

                <div class="col-md-6 form-group">
                    <label>Latitude</label>
                    <input type="text" class="form-control" name="latitude" value="'.$valoresmodal[latitude].'" autocomplete="off">
                </div>

                <div class="col-md-6 form-group">
                    <label>Longitude</label>
                    <input type="text" class="form-control" name="longitude" value="'.$valoresmodal[longitude].'" autocomplete="off">
                </div>

                
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                
                <input type="hidden" name="insert" value="valor">
                <input type="hidden" name="id" value="'.$valoresmodal[id].'">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="editCity" class="btn btn-success" value="Edit">
            </div>
            
        </div>
    </div>
</form>
</div>


<div class="modal inmodal fade" id="delete'.$valoresmodal[id].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="cities" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Delete City</h4>
                <small class="font-bold">Delete city '.$valoresmodal[name].'.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Delete city '.$valoresmodal[name].'.?</h3>
                              
                
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
                <input type="hidden" name="id" value="'.$valoresmodal[id].'">
                <input type="hidden" name="name" value="'.$valoresmodal[name].'">
                <input type="hidden" name="delete" value="valor">
            
            <input type="submit" name="deleteCity" class="btn btn-danger" value="Delete">
            </div>
            
        </div>
    </div>
</form>
</div>
      
      ';
      
      
  }

?>