
<div class="footer">
    <div class="pull-right">
        <?php echo $info_company['name_company']?>
    </div>
    <div>
        <strong>Copyright</strong> &copy; <?php echo date('Y') ?>
    </div>
</div>
</div>
</div>


    <!-- Mainly scripts -->
    <script src="<?php echo $rutastyles?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>

   

    <!-- Flot -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo $rutastyles?>assets/js/inspinia.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo $rutastyles?>assets/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo $rutastyles?>assets/js/plugins/chartJs/Chart.min.js"></script>
    
     <!-- Input Mask-->
    <script src="<?php echo $rutastyles?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/toastr/toastr.min.js"></script>



<script src="<?php echo $rutastyles?>assets/js/plugins/iCheck/icheck.min.js"></script>
<script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                    
                });
            });
</script>

    

<!-- Data Tables -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>


<!-- Page-Level Scripts -->

 <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "<?php echo $rutastyles?>assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });
        });
    </script>


<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>

<script src="<?php echo $rutastyles?>assets/js/plugins/validate/jquery.validate.js"></script>
<script>
<?php
    $validate="{errorPlacement: function (error, element){element.before(error);}}";
    
    echo'$("#form").validate('.$validate.');';
    
    if($_GET['ruta'] == 'configuracion') {
    echo'$("#formuser").validate('.$validate.');';
    foreach($execute as $users){
        echo'$("#formuser'.$users[id_user].'").validate('.$validate.');';
        echo'$("#formuserpass'.$users[id_user].'").validate('.$validate.');';
      }
    }

    if($_GET['ruta'] == 'perfil') {
    echo'$("#formuser").validate('.$validate.');';
    echo'$("#formuserpass").validate('.$validate.');';
    echo'$("#formusersec").validate('.$validate.');';
    }
        
    if($_GET['ruta'] == 'bitacora') {
    echo'$("#formfecha").validate('.$validate.');';
    echo'$("#formnombres").validate('.$validate.');';
    }  
        
                        
    if($_GET['ruta'] == 'paciente') {
    echo'$("#formpaciente").validate('.$validate.');';
    echo'$("#formfecha").validate('.$validate.');';
    echo'$("#formcedula").validate('.$validate.');';
    echo'$("#formnombres").validate('.$validate.');';
    foreach($execute as $valores){
          echo'$("#formpaciente'.$valores[id_paciente].'").validate('.$validate.');';
      }
    }

    if($_GET['ruta'] == 'detalle-paciente') {
    echo'$("#formcitologia").validate('.$validate.');';
    echo'$("#formbiopsia").validate('.$validate.');';
        
    }
        
    if($_GET['ruta'] == 'citologia') {
    echo'$("#formfecha").validate('.$validate.');';
    echo'$("#formcorre").validate('.$validate.');';
    }
        
    if($_GET['ruta'] == 'biopsia') {
    echo'$("#formfecha").validate('.$validate.');';
    }
                        
    if($_GET['ruta'] == 'clinica') {
    echo'$("#formclinica").validate('.$validate.');';
    foreach($execute as $valores){
          echo'$("#formclinica'.$valores[id_clinica].'").validate('.$validate.');';
      }
    }
        
    if($_GET['ruta'] == 'doctor') {
    echo'$("#formdoctor").validate('.$validate.');';
    foreach($execute as $valores){
          echo'$("#formdoctor'.$valores[id_doctor].'").validate('.$validate.');';
      }
    }

    if($_GET['ruta'] == 'pre-citologia') {
    echo'$("#formdatacitologia").validate('.$validate.');';
    foreach($execute as $valores){
          echo'$("#formdatacitologia'.$valores[id_datacitologia].'").validate('.$validate.');';
      }
    }

    if($_GET['ruta'] == 'pre-biopsia') {
    echo'$("#formdatabiopsia").validate('.$validate.');';
    foreach($execute as $valores){
          echo'$("#formdatabiopsia'.$valores[id_databiopsia].'").validate('.$validate.');';
      }
    }
                         
    
    
?>
</script>


    <!-- ChartJS-->
    <script src="<?php echo $rutastyles?>assets/js/plugins/chartJs/Chart.min.js"></script>
    <script src="<?php echo $rutastyles?>assets/js/demo/chartjs-demo.js"></script>

    <!-- blueimp gallery -->
    <script src="<?php echo $rutastyles?>assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
  
</body>
</html>

