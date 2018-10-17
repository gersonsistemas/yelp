
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Search Reviews in Business <?php echo "$_POST[info_business]";?></h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Dashboard</a>
            </li>
            <li class="active">
                <strong>Search Reviews</strong>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div><br>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Search Reviews
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

                        <form action="search-reviews" method="POST" target="_top" title="Reviews">


                            <input type="hidden" name="info_business" value="<?php echo "$_POST[info_business]";?>">
                            <input type="hidden" name="id_business" value="<?php echo "$_POST[id_business]";?>">
                            <input type="hidden" name="id_api" value="<?php echo "$_POST[id_api]";?>">
                
                            <button name="search-reviews" value="value" type="submit" class="btn btn-success">Search</button>
            
                        </form>  

                        <br><br><br>
                        
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Rating</th>
                                    <th>Time Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                                        
                            <?php include('../view/search-reviews/table.php');?>
                                       
                        </table>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
