
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Savings | Ezigamire</title>

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
        <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card-body">
                    <div class="table-responsive">
                    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Employee savings details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong> Pension</strong>

                <p class="text-muted">
                7%
                </p>

                <strong> Tax</strong>

                <p class="text-muted">
                0%
                </p>

                <strong> insurance</strong>

                <p class="text-muted">
                0%
                </p>

                <hr>

                


        
               <a class="btn btn-sm btn-success" href="submissions.php?approve_id=<?php echo $deals['deal_id'];?>"> Pay for pension</a>

                <a class="btn btn-sm btn-danger" href="submissions.php?reject_id=<?php echo $deals['deal_id'];?>"> Pay for insurance</a>

              


      



                      
                
                 
    

              </div>
              
              <!-- /.card-body -->
            </div>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
    </div>

            
          
            
        
        
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
          <a href="https://adminlte.io">sterkgroup</a>.</strong
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

