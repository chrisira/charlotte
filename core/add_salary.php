<?php
require_once("app/bootstrap.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Salary | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  </head>
  <body>
  <?php

  require_once('nav.php');


  ?>
  <section class="content">
          <div class="container-fluid">
            <!-- Info boxes -->
            
              <!-- /.col -->
            </div>
            <br>
               
               

            <!-- /.row -->

            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <div class="m-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Salary</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="submissions.php" method="post">
                <div class="card-body">
                       <div class="form-group">
                    <label for="exampleInputEmail1">Job title</label>
                    <select class="custom-select rounded-0" name="job" id="exampleSelectRounded0">
                    <           <?php
    
    $jobs = $db->GetRows("SELECT job_id,job_title from jobs");
    $flag = 0;
    foreach($jobs as $jobs){
      $flag++;
      ?>
                   <option value="<?=$jobs['job_id']?>" name="job"><?=$jobs['job_title']?></option>


                   <?php

    }?>

                    
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount" name="amount" required>
                  </div>
         
             
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="add_salary">Add</button>
                </div>
              </form>
            </div>
               
               
              <!-- Left col -->
              <div class="col-md-12 col-sm-12">
                <!-- MAP & BOX PANE -->
                
    
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->
            
                <!-- /.card -->
              </div>
              <!-- /.col -->

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!--/. container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong
          >Copyright &copy; 2022
          <a href="https://adminlte.io">E-zigamire</a>.</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
  </body>
</html>


  