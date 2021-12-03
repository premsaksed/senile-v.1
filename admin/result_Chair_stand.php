<?php include_once 'head.php'; ?>
<?php include_once '../connection.php'; ?>
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>รายงานผลลุกยืนจากเก้าอี้</h3>
                            <br><br>     </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apexchart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>ลุกยืนจากเก้าอี้</h4>
                                </div>
                                <div class="card-body">
                                    <div id="area"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a
                                href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/ui-apexchart.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
<?php
include_once '../connection.php';

 
$query = "
SELECT Max(Chair_stand) AS totol, MIN(Chair_stand) AS totol1, DATE_FORMAT(`datesave`, '%Y%') AS `datesave` FROM Records GROUP BY DATE_FORMAT(`datesave`, '%Y%');
";
$result = mysqli_query($con, $query);
$resultchart = mysqli_query($con, $query);  


 //for chart
$datesave = array();
$totol = array();
$totol1 = array();
$sum = array();

while($rs = mysqli_fetch_array($resultchart)){ 
  $datesave[] = "\"".$rs['datesave']."\""; 
  $totol[] = "\"".$rs['totol']."\""; 
  $totol1[] = "\"".$rs['totol1']."\""; 
  $a= ($rs['totol1']+$rs['totol'])/2;
  $sum[] = "\"".$a."\""; 
}
$datesave = implode(",", $datesave); 
$totol = implode(",", $totol); 
$totol1 = implode(",", $totol1); 
$sum = implode(",", $sum); 
 
?>

<script >
   
function x(a,b){
  
}


 var areaOptions = {
   series: [
     {
       name: "ค่ามากสุด",
       data: [<?php echo $totol;?>],
     },
     {
       name: "ค่าต่ำสุด",
       data: [<?php echo $totol1;?>],
     },
     {
       name: "ค่าเฉลี่ย",
       data: [<?php echo $sum;?>],
     },
   ],
   chart: {
     height: 350,
     
     type: "area",
   },
   dataLabels: {
     enabled: false,
   },
   stroke: {
     curve: "smooth",
   },
   xaxis: {
     
     categories: [
        <?php echo $datesave;?>
     ],
   },
   tooltip: {
     x: {
       format: "dd/MM/yy HH:mm",
     },
   },
 };

var area = new ApexCharts(document.querySelector("#area"), areaOptions);

area.render();



</script>
