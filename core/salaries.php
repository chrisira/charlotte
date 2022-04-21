<?php

require_once("app/bootstrap.php");


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>salaries | Dashboard 2</title>

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
$total_salaries= $db->Getsum("SELECT COUNT(salary_id) FROM salaries");

  ?>
  <section class="content">
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
             
             

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

             
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-2">
                  <span class="info-box-icon bg-info elevation-1"
                    ><i class="fas fa-money-bill"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total salaries</span>
                    <span class="info-box-number"><?php echo $total_salaries ?></span>
                  </div>
              
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <br>
               
               

            <!-- /.row -->

            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <a href="add_salary.php" class="text-center btn btn-md btn-info">Add New</a>
               
               
              <!-- Left col -->
              <div class="col-md-12 col-sm-12">
                <!-- MAP & BOX PANE -->
                
    
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                  <div class="card-header border-transparent">
                    <h3 class="card-title">All Salaries</h3>

                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-card-widget="collapse"
                      >
                        <i class="fas fa-minus"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-card-widget="remove"
                      >
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Job title</th>
                            <th>Amount</th>
                                 <th>Added On</th>
                            
                            <th>Actions</th>
                         <?php
    
    $salaries = $db->GetRows("SELECT salaries.salary_id,jobs.job_id,job_title,amount,salaries.createdAt FROM jobs JOIN salaries ON jobs.job_id = salaries.job_id");
    $flag = 0;
    foreach($salaries as $salaries){
      $flag++;
      ?>
                          </tr>
                        </thead>
                        <tbody>
                      <tr class="odd">
              <td class="dtr-control sorting_1" tabindex="0"><?php echo $flag;?></td>
              <td><?php echo $salaries['job_title'];?></td>
              
              <td><?php echo $salaries['amount'];?></td>
              <td><?php echo $salaries['createdAt'];?></td>
              
              <td><a class="btn btn-xs btn-info" href="edit_salary.php?salary_id=<?php echo $salaries['salary_id'];?>"><i class="fas fa-pencil-alt"></i></a>  <a class="btn btn-xs btn-danger" href="submissions.php?salary_id=<?php echo $salaries['salary_id'];?>"><i class="fas fa-trash"></i></a> </td>
              
            
            
             
            </tr>
            <?php
    }
    ?>
                          
                          
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.card-body -->
                 
                  <!-- /.card-footer -->
                </div>
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


  