<div class="messages  mensaje-bottom-danger">
    <?php 
        if($errors) {
            foreach ($errors as $key => $value) {
				echo'
                <div class="alert alert-danger alert-dismissible animated bounceIn">
                    <div class="animated bounceIn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Error</h4>
                        '.$value.'
                    </div>
                </div>
                                ';										
				        }
                    } 
                ?>
</div>

<div class="messages  mensaje-bottom-warning">
    <?php 
        if($warning) {
            foreach ($warning as $key => $value) {
				echo'
                <div class="alert alert-warning alert-dismissible animated bounceIn">
                    <div class="animated bounceIn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-warning"></i> Warning</h4>
                        '.$value.'
                    </div>
                </div>
                                ';										
				        }
                    } 
                ?>
</div>

<div class="messages  mensaje-bottom-success">
    <?php 
        if($success) {
            foreach ($success as $key => $value) {
				echo'
                <div class="alert alert-success alert-dismissible animated bounceIn">
                    <div class="animated bounceIn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Success</h4>
                        '.$value.'
                    </div>
                </div>
                                ';										
				        }
                    } 
                ?>
</div>

<div class="messages  mensaje-bottom-info">
    <?php 
        if($info) {
            foreach ($info as $key => $value) {
				echo'
                <div class="alert alert-info alert-dismissible animated bounceIn">
                    <div class="animated bounceIn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-info"></i> Información</h4>
                        '.$value.'
                    </div>
                </div>
                                ';										
				        }
                    } 
                ?>
</div>
