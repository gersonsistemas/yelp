<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo $info_company['title_html']?></h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Dashboard</a>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="row">
            <a href="configuracion"><div class="col-lg-3">
                <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-cogs fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Usuarios del Sistema</span>
                                <h2 class="font-bold">
<?php
                                    
    $buscaUsers="SELECT * FROM `users`";
    $ejecuta=$connect-> query($buscaUsers);
    $numUsers=mysqli_num_rows($ejecuta);
       
    echo"N° $numUsers";
                
?>
                                
                                
                                
                                </h2>
                            </div>
                        </div>
                </div>
            </div></a>
   
    </div>




