
<?php
 include "db.php";

session_start();
 if(isset($_GET["id"]))
{

    $id=$_GET["id"];
    $_SESSION["id1"]=$id;
}

 $id1=$_SESSION["id1"];
if(isset($_POST['submit'])){



    $name=$_POST['name']; 

$steps=($_POST['steps']);
$sql="Update yogastep Set name='$name',Steps='$steps' where id='$id1'";
$result=mysqli_query($conn,$sql);






  header("Location:index.php"); 
} 


?>
<!DOCTYPE html>
<html lang="en">

<?php

require 'head.php';

?>

<body class="fix-header fix-sidebar card-no-border">
 
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
  
    <div id="main-wrapper">
        
        <?php
        require "header.php";
        ?>
       
        <?php
        require 'aside.php';
        ?>
     
        <div class="page-wrapper">
          
            <div class="container-fluid">
              
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Posture</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Poture</li>
                        </ol>
                    </div>
                   
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h2 class="card-title"><a href="menu.php"><b>steps of Posture</b></a></h2>
                                
                                
                                        <form class='form-horizontal form-material'action="steps.php" method="POST" enctype="multipart/form-data">

   <?php                      
           
   $fetch=mysqli_query($conn,"SELECT * from yogastep where id='$id1'")or die(mysqli_error());

                                                                      $lenght=mysqli_num_rows($fetch);
                                                                   if ($lenght!=0) {
                                                                while($row=mysqli_fetch_array($fetch)){
                                                                            $steps =$row['steps'];
                                                                            $name =$row['name'];
                                                                            echo  "


                                            <div class='form-group'>
                                                <label class='col-md-12' >Name</label>
                                                <div class='col-md-12'>
                                                    <input type='text' value='$name' class='form-control form-control-line' name='name'>
                                                </div>
                                            </div>
                                            


                                            
                                            
                                            <div class='form-group'>
                                                <label class='col-md-12'>Steps</label>
                                                <div class='col-md-12'>
                                                    <input type='text' value='$steps' class='form-control form-control-line' name='steps'>
                                                </div>
                                            
                                            </div>
                                                   ";
                            }
                        }
                        ?>
                                            
                                            <div class='form-group'>
                                                <div class='col-sm-12'>
                                                    <input type="submit" name="submit" class='btn btn-success' value='Update'>
                                                </div>
                                            </div>
                                        </form>
                                   

                                                                    </div>
                            </div>
                            <br>
                        </div>
                    </div>
                            </div>  
       


      
               
            </div>
            
        
            <?php
            include "footer.php";
            ?>
            
        </div>
      
    </div>
   
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>


    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

     <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Chart JS -->
    <script src="../assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="../assets/plugins/peity/jquery.peity.init.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <!-------------Sweet alert---------------------------------->
        

    <script>

  
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength":25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });

    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    });
    

    $('#example24').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    });

    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>

</html>