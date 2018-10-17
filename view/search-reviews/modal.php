
<?php 

foreach($execute as $valoresmodal){
      
      echo'

<div class="modal inmodal fade" id="view'.$valoresmodal[id].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="cities" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Detail Review</h4>
            </div>
            
            <div class="modal-body">

                <h3>ID Review '.$valoresmodal[id_api].'</h3>
                <h3>Username: '.$valoresmodal[username].'</h3>
                <h3>Time Created: '.$valoresmodal[time_created].'</h3>
                <h3>Rating: '.$valoresmodal[rating].'</h3>
                

                <h3>Text<h3>

                <p>'.$valoresmodal[text].'</p>
                
                <a  class="btn btn-default" href="'.$valoresmodal[url].'" target="_blank">URL</a>
                
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
      ';
      
      
  }

?>