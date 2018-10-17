 <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Gestión de Usuarios</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Dashboard</a>
            </li>
            <li class="active">
                <strong>Usuarios</strong>
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
                        Administración de Usuarios
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
                        <a class="btn btn-success" data-toggle="modal" href="#newUser">Nuevo Usuario</a>
                        <br><br><br>
                        
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Nombre Real</th>
                                    <th>Rol</th>
                                    <th>Insertar</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                    <th>Status</th>
                                    <th>Edición</th>
                                </tr>
                            </thead>
                                        
                                <?php include('../view/users/table.php');?>     
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
