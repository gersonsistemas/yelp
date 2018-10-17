<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MTTU | Admin</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../../assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    
  
    
    <link href="../../assets/css/animate.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    
    <link href="../../assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    
    <!-- Data Tables -->
    <link href="../../assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="../../assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    
    <script language='javascript' type='text/javascript'>
    
            function Solo_Numerico(variable){
            Numer=parseInt(variable);
                if (isNaN(Numer)){
                return '';
                }
                return Numer;
            }
            function ValNumero(Control){
            Control.value=Solo_Numerico(Control.value);
            }
    </script>
   
</head>

<?php
require_once '../../includes/Config_db.php';
ini_set('display_errors', 'Off');

$q=$_POST['q'];

$sql="select * from m_modalidad where texto = '$q'";
$ejecutasql= $connect-> query($sql);


if(mysqli_num_rows($ejecutasql)==0){

echo '
 <div class="ibox-content">
                         
                       
    <a class="btn btn-success" data-toggle="modal" href="#newLineaTP">Agregar</a>
                        
                                

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr class="text-table-gamp">
                        <th >Código</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                    </tr>
                    </thead>
                    <tbody>
             <tr class="gradeU">
                        <td class="text-table-gamp"></td>
                        <td class="center text-table-gamp"></td>
                        <td class="center text-table-gamp"></td>
                        <td class="center text-table-gamp"></td>
            
</tr> 
                    
                    </tbody>
                    
                    </table>

                    </div>

';

}else{


$fila=mysqli_fetch_array($ejecutasql);
    
$usuario=$fila['id_user'];

setcookie("User","$usuario",time() + 600);
    
echo '

<h3><strong>Pregunta de seguridad</strong> : '.$fila[preg_1].' </h3> 
  <br>

<h3><strong>Respuesta de seguridad</strong></h3> 

<input autocomplete="Off" id="buscar1" onkeyup="loadXMLDoc1()" type="text" placeholder="Ingrese su respuesta" name="respuesta" class="form-control"><br>

';
}

?>

<!-- Mainly scripts -->
    <script src="../../assets/js/jquery-2.1.1.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../assets/js/plugins/jeditable/jquery.jeditable.js"></script>

   

    <!-- Flot -->
    <script src="../../assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="../../assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../../assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="../../assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../../assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../assets/js/inspinia.js"></script>
    <script src="../../assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../../assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../../assets/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="../../assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../../assets/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="../../assets/js/plugins/chartJs/Chart.min.js"></script>
    
     <!-- Input Mask-->
    <script src="../../assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Toastr -->
    <script src="../../assets/js/plugins/toastr/toastr.min.js"></script>

<script src="../../assets/js/plugins/iCheck/icheck.min.js"></script>
<script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                    
                });
            });
</script>

<!-- Data Tables -->
    <script src="../../assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../../assets/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="../../assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

<!-- Page-Level Scripts -->

 <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "../../assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
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


 <script>
       
$(document).ready(function() {
    
       toastr.options = {
                    "closeButton": true,
  "debug": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "onclick": null,
  "showDuration": "400",
  "hideDuration": "1000",
  "timeOut": "7000",
  "extendedTimeOut": "6000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
                };

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>

