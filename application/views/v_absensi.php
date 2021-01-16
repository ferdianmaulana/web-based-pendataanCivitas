<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/logo.png')?>">
    <title>Absensi</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/select2/dist/css/select2.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/jquery-minicolors/jquery.minicolors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/quill/dist/quill.snow.css')?>">
    <link href="<?php echo base_url('assets/extra-libs/DataTables/DataTables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dist/css/style.min.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="javascript:void(0)">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?php echo base_url('assets/images/logo.png')?>" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                      <?php
                      $role = $this->session->userdata('role');
                      if ($role == 'Dosen') :?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_profil'); ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profil</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_absensi'); ?>" aria-expanded="false"><i class="mdi mdi-clipboard-outline"></i><span class="hide-menu">Absensi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_mahasiswa'); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Daftar Mahasiswa</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_login/logout'); ?>" aria-expanded="false"><i class="mdi mdi-logout-variant"></i><span class="hide-menu">Logout</span></a></li>
                      <?php elseif ($role == 'Karyawan') :?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_profil'); ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profil</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_absensi'); ?>" aria-expanded="false"><i class="mdi mdi-clipboard-outline"></i><span class="hide-menu">Absensi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_login/logout'); ?>" aria-expanded="false"><i class="mdi mdi-logout-variant"></i><span class="hide-menu">Logout</span></a></li>
                      <?php elseif ($role == 'Admin'):?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_tambahUser'); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span class="hide-menu">Tambah User</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('c_login/logout'); ?>" aria-expanded="false"><i class="mdi mdi-logout-variant"></i><span class="hide-menu">Logout</span></a></li>
                      <?php endif; ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Absensi</h3>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <h3 class="card-title" style="text-align: center">Absensi</h3>
                              <div class="table-responsive">
                                  <table id="table_id" class="table table-striped table-bordered">
                                      <thead>
                                  <tr>
                                      <th>Tanggal</th>
                                      <th>Kehadiran</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($absensi as $log): ?>
                                  <tr>
                                      <td><?php echo $log['tgl']; ?></td>
                                      <td><?php echo $log['keterangan']; ?></td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
            <div class="footer">
              <footer class="footer text-center">
                  All Rights Reserved by Ferdian. Designed and Developed by Ferdian</a>.
              </footer>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/sparkline/sparkline.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/dist/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/dist/js/sidebarmenu.js'); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/custom.min.js'); ?>"></script>
    <!-- This Page JS -->
    <script src="<?php echo base_url('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/pages/mask/mask.init.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/select2/dist/js/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-asColor/dist/jquery-asColor.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-asGradient/dist/jquery-asGradient.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-minicolors/jquery.minicolors.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/quill/dist/quill.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/DataTables/DataTables/js/jquery.dataTables.min.js'); ?>"></script>

    <script type="text/javascript">
      $(document).ready( function () {
      $('#table_id').DataTable();
      } );
    </script>

</body>

</html>
