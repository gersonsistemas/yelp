<div class="modal inmodal fade" id="Consultfechas" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="bitacora" method="post" id="formfecha">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Consultar por fechas</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="form-group col-md-6">
                        
                    <label>Desde (*)</label>
                    
                    
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            
                        <input type="date" name="fecha_inicio" class="form-control" value="<?php echo $fecha_inicio ?>" required>
                    </div>
                    
                </div>
                    
                <div class="form-group col-md-6">
                        
                    <label>Hasta (*)</label>
                    
                    
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        
                        <input type="date" name="fecha_fin" class="form-control" value="<?php echo $fecha_fin ?>" required>
                    </div>
                    
                </div>
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="consultarFechas" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="Consultnombres" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="bitacora" method="post" id="formnombres">
     <div class="modal-dialog modal-sm">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Consultar Nombres</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="form-group col-md-12">
                        
                    <label>Ingrese el nombre del usuario (*)</label>
                    <input type="text" name="nombres" class="form-control" required>
                    
                </div>
                    

                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="consultarNombres" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>