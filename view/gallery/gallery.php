<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Galeria</h2>
        <ol class="breadcrumb">
            <li>
                <a href="inicio">Inicio</a>
            </li>
            <li class="active">
                <strong>Galeria</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Imagenes alojadas en el servidor
                    </h5>
                    
                    <div class="ibox-tools">
                        
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-user">
                            
                            <li>
                                <a href="#">Config option 1</a>
                            </li>
                            
                            <li>
                                <a href="#">Config option 2</a>
                            </li>
                        </ul>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="ibox-content">
                    
                    <div class="row">
                        
                        <form enctype="multipart/form-data" action="gallery" method="POST" id="form" >
          
                            <label for="exampleInputFile">Cargar imagen al servidor</label>
                            <input class="btn-default btn" type="file" id="exampleInputFile" name="uploadedfile" required><br>
          
                            <input type="submit" name="image" value="Cargar" class="btn-success btn">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                                               <div class="lightBoxGallery">
<?php

$directory = 'assets/images-galeria/';

$allowed_types=array('jpg','jpeg','gif','png');

$file_parts=array();
$ext='';
$title='';
$i=0;

$dir_handle = @opendir($directory) or die("Hay un error con el directorio de imágenes!");


while ($file = readdir($dir_handle))
{
	if($file=='.' || $file == '..') continue;

	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);

	$nomargin='';

	if(in_array($ext,$allowed_types))
	{
		if(($i+1)%3==0) $nomargin='nomargin';
      

		echo '
    

        
           <div class="col-lg-3 col-xs-6 ">
  
        <a href="assets/images-galeria/'.$file.'" title="'.$file.'" data-gallery=""><img class="img-gallery-gamp" src="assets/images-galeria/'.$file.'"></a>
         
        <a title="'.$file.'"><i class="fa fa-folder-o"></i></a>
        <a title="Descargar" href="assets/images-galeria/'.$file.'" download="'.$file.'"><i class="fa fa-download"></i></a> 
        <a title="Eliminar" data-toggle="modal" data-target="#eliminar'.$i.'"><i class="fa fa-trash-o"></i></a> 
        
    </div>
    
    <div class="modal inmodal fade" id="eliminar'.$i.'" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form action="gallery" method="POST">
            <div class="modal-content animated bounceInRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Eliminar imagen</h4>
                <small class="font-bold">Eliminación de imagen '.$file.'.
                </small>
            </div>
                
                <div class="modal-body">
                    
        ¿Realmente desea eliminar la imagen '.$file.' del servidor?
                    

                </div>
                
                <div class="modal-footer">
                <input type="hidden" name="deletefile" value="assets/images-galeria/'.$file.'" class="btn btn-primary">
                
                    <button type="submit" class="btn btn-danger" name="eliminarServicio" value="valor">Eliminar</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
</div>



        
		';

		$i++;
	}
}


closedir($dir_handle);

?>
                            
                        
                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>

                        </div>