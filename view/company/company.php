<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Gestión de Organización</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Dashboard</a>
            </li>
            <li class="active">
                <strong>Organización</strong>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<br>
    
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Datos y Configuración
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
                        <form role="form" action="company" method="post" id="form">
                    
                    <div class="col-md-6 form-group">
                        
                        <label for="name_company">Nombre de la Organización</label>
                        <input type="text" class="form-control" id="name_company" name="name_company" value="<?php echo $info_company['name_company']?>" required>
                        
                    </div>
                    
                    <div class="col-md-6 form-group">
                        
                        <label for="prefix_company">Prefijo Mostrado</label>
                        <input type="text" class="form-control" id="prefix_company" name="prefix_company" value="<?php echo $info_company['prefix_company']?>" required>
                        
                    </div>
                    
                    <div class="col-md-6 form-group">
                        
                        <label for="img_logo">Imagen Cintillo</label>
                        <input type="text" class="form-control" id="img_logo" name="img_logo" value="<?php echo $info_company['img_logo']?>" required>
                        
                    </div>
                    
                    <div class="col-md-6 form-group">
                        
                        <label for="img_login">Imagen Login</label>
                        <input type="text" class="form-control" id="img_login" name="img_login" value="<?php echo $info_company['img_login']?>" required>
                        
                    </div>
                    
                    <div class="col-md-6 form-group">
                        
                        <label for="img_profile">Imagen Perfil Fija</label>
                        <input type="text" class="form-control" id="img_profile" name="img_profile" value="<?php echo $info_company['img_profile']?>" required>
                        
                    </div>
                    
                    <div class="col-md-6 form-group">
                        
                        <label for="title_html">Title del System</label>
                        <input type="text" class="form-control" id="title_html" name="title_html" value="<?php echo $info_company['title_html']?>" required>
                        
                    </div>
                                      
                                      
                    <div class="col-md-12 form-group">  
                        
                    <br><input type="submit" name="changeCompany" class="btn btn-success" value="Guardar Cambios">
                        
                    </div>
                    
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
