
<?php
require_once("app/bootstrap.php");
 $total_users= $db->Getsum("SELECT COUNT(user_id) FROM users");
 $total_employees= $db->Getsum("SELECT COUNT(employee_id) FROM employees");
 $total_jobs= $db->Getsum("SELECT COUNT(job_id) FROM jobs");
 $total_departments= $db->Getsum("SELECT COUNT(dep_id) FROM departments");

 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-zigamire  | Dashboard</title>

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
  <body
  <?php

  require_once('nav.php');


  ?>
      

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"
                    ><i class="fas fa-cog"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Departments</span>
                    <span class="info-box-number"> <?php echo $total_departments ?> </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"
                    ><i class="fas fa-briefcase"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Employees</span>
                    <span class="info-box-number"><?php echo $total_employees ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"
                    ><i class="fas fa-money-bill"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Jobs</span>
                    <span class="info-box-number"><?php echo $total_jobs ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"
                    ><i class="fas fa-users"></i
                  ></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"><?php echo $total_users ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <div class="col-md-12">
                <!-- MAP & BOX PANE -->
                
                <!-- /.card -->
                <div class="row">
                  <div class="col-md-6">
                    <!-- DIRECT CHAT -->
                    
                    <!--/.direct-chat -->
                  </div>
                  <!-- /.col -->

                 
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                  <div class="card-header border-transparent">
                    <h3 class="card-title">Last Employees</h3>

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
                            <th>#</th>
                            <th>Names</th>
                            <th>Marital Status</th>
                            <th>DOB</th>
                            <th>Position</th>
                            <th>email</th>
                            <th>Phone</th>
                          </tr>
                        </thead>
                       <?php
    
    $employees = $db->GetRows("SELECT  employee_id,names,marital_status,dob,job_title,email,phone,address,nid,status FROM employees JOIN jobs ON jobs.job_id = employees.position");
    $flag = 0;
    foreach($employees as $employees){
      $flag++;
      ?>
                          </tr>
                        </thead>
                        <tbody>
                      <tr class="odd">
              <td class="dtr-control sorting_1" tabindex="0"><?php echo $flag;?></td>
              <td><?php echo $employees['names'];?></td>
              
              <td><?php echo $employees['marital_status'];?></td>
              <td><?php echo $employees['dob'];?></td>
              <td><?php echo $employees['job_title'];?></td>
              <td><?php echo $employees['email'];?></td>
              <td><?php echo $employees['phone'];?></td>
              
              
              
              
            
            
             
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
