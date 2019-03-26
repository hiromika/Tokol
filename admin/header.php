
<!DOCTYPE html>
<?php 
require '../conn.php';
session_start();
    $timeout = 60; // Set timeout minutes
    $logout_redirect_url = "../index.php"; // Set logout URL

    $timeout = $timeout * 60; // Converts minutes to seconds
    if (isset($_SESSION['start_time'])) {
        if ($_SESSION['role'] != '1') {
            session_destroy();
            echo "<script>window.location = '$logout_redirect_url'</script>";
        }
        $elapsed_time = time() - $_SESSION['start_time'];
        if ($elapsed_time >= $timeout) {
            session_destroy();
            echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
        }
    }
    $_SESSION['start_time'] = time();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Click</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" type="image/x-icon" href="../assets/source/" />

        <link rel="stylesheet" href="../assets/source/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/source/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="../assets/source/fonts/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../assets/source/fonts/ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" href="../assets/source/css/bootstrap3-wysihtml5.css">

        <link rel="stylesheet" href="../assets/source/js/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../assets/source/js/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" href="../assets/source/css/AdminLTE.css">
        <link rel="stylesheet" href="../assets/source/css/_all-skins.min.css">
        <link rel="stylesheet" href="../assets/source/css/dropzone/dropzone.min.css">
        
        <link rel="stylesheet" href="../assets/source/css/jquery-editable-select.css">
        <link rel="stylesheet" href="../assets/source/css/multi-select.css">     

    <!--     <link rel="stylesheet" href="../assets/source/css/jquery-confirm.min.css"> -->
        

        <link rel="stylesheet" href="../assets/source/css/style.css" />
        <link rel="stylesheet" href="../assets/source/morris/morris.css"/>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      

        <!-- EasyUI -->
        <script src="../assets/source/js/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../assets/source/js/bootstrap/bootstrap.min.js"></script>


<!--        <script src="../assets/source/js/jquery-confirm.min.js"></script> -->
       <script src="../assets/source/js/bootstrap3-wysihtml5.all.min.js"></script>
       <script src="../assets/source/js/jquery-editable-select.js"></script>
       <script src="../assets/source/js/jquery.multi-select.js"></script>
        
        <script src="../assets/source/js/dropzone/dropzone.min.js"></script>

        <script src="../assets/source/morris/morris.min.js"></script>
        <script src="../assets/source/sparkline/jquery.sparkline.js"></script>
    
        
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini" ><img src="../assets/source/img/" style="border: none;" width="32" alt="Logo" /></span>
                    <span class="logo-lg">Click Clothing<font size="1pt"></font></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" title="Profile">
                                    <i class="glyphicon glyphicon-user"></i> &nbsp;
                                    <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span> 
                                </a>                            
                            </li>
                            <li>
                                <a href="../logout.php" onclick="return confirm ('Apakah Anda Akan Keluar.?');" title="Logout">
                                    <i class="glyphicon glyphicon-log-out"></i> &nbsp;
                                    <span class="hidden-xs">Logout</span> 
                                </a>                            
                            </li>
                        </ul>
                    </div><!-- /.navbar-custom-menu -->
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar" style="height: auto;">
                <ul class="sidebar-menu">
                    <div class="user-panel">
                        <div class="pull-left image" style="">
                            <img src="<?php echo $_SESSION['gambar']; ?>" class="img img-circle" alt="User Image" style="border: 2px solid #3C8DBC; height: 45px !important;" />
                        </div>
                        <div class="pull-left info">
                            <p>Selamat Datang <br /><?php echo $_SESSION['username']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <li class="header">MAIN NAVIGATION ADMIN</li>
                    <li>
                            <a href="index.php">
                                <i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span>
                            </a>
                    </li>
                      <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            <span>Data Custom  </span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="custom.php"><i class="fa fa-angle-double-right"></i> Custom </a></li>
                           
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            <span>Produk</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="produk.php"><i class="fa fa-angle-double-right"></i> Produk</a></li>
                            <li><a href="input-produk.php"><i class="fa fa-angle-double-right"></i> Tambah Produk</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-usd"></i> <span>Purchase Order</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="po-terima.php"><i class="fa fa-angle-double-right"></i> Data PO Terima</a></li>
                            <li><a href="konfirmasi.php"><i class="fa fa-angle-double-right"></i> Konfirmasi Pembayaran</a></li>
                            <li><a href="po.php"><i class="fa fa-angle-double-right"></i> Data PO Kirim</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i> <span>Pengguna</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="admin.php"><i class="fa fa-angle-double-right"></i>Data Admin</a></li>
                            <li><a href="input-admin.php"><i class="fa fa-angle-double-right"></i>Tambah Admin</a></li>
                            <li><a href="customer.php"><i class="fa fa-angle-double-right"></i>Data Customer</a></li>
                            <li><a href="input-customer.php"><i class="fa fa-angle-double-right"></i>Tambah Customer</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i> <span>Laporan</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="po-report.php"><i class="fa fa-angle-double-right"></i> Laporan Purchase Order</a></li>
                            <li><a href="cetak-produk.php"><i class="fa fa-angle-double-right"></i> Laporan Product</a></li>
                            <li><a href="cetak-customer.php"><i class="fa fa-angle-double-right"></i> Laporan Data Customer</a></li>
                        </ul>
                    </li> 
                </ul>
                </section>
            </aside>

            <!-- content -->

