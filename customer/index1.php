
<!DOCTYPE html>
<?php 
require '../conn.php';
session_start();
    // $timeout = 60; // Set timeout minutes
    // $logout_redirect_url = "../index.php"; // Set logout URL

    // $timeout = $timeout * 60; // Converts minutes to seconds
    // if (isset($_SESSION['start_time'])) {
    //     if ($_SESSION['role'] != '1') {
    //         session_destroy();
    //         echo "<script>window.location = '$logout_redirect_url'</script>";
    //     }
    //     $elapsed_time = time() - $_SESSION['start_time'];
    //     if ($elapsed_time >= $timeout) {
    //         session_destroy();
    //         echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    //     }
    // }
    // $_SESSION['start_time'] = time();

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
                <a href="./index.php" class="logo">
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
                            <img src="../admin/<?php echo $_SESSION['gambar']; ?>" class="img img-circle" alt="User Image" style="border: 2px solid #3C8DBC; height: 45px !important;" />
                        </div>
                        <div class="pull-left info">
                            <p>Selamat Datang <br /><?php echo $_SESSION['username']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="./index1.php?link=po">
                            <i class="glyphicon glyphicon-shopping-cart"></i> <span>Data Purchase Order</span>
                        </a>
                    </li> 
                    <li>
                        <a href="./index1.php?link=cs">
                            <i class="glyphicon glyphicon-blackboard"></i> <span>Data Custom</span>
                        </a>
                    </li> 
                    <li>
                        <a href="./index1.php?link=p&hal=edit&kd_cus=<?php echo $_SESSION['user_id'];?>">
                            <i class="glyphicon glyphicon-user"></i> <span>Profile</span>
                        </a>
                    </li>
                </ul>
                </section>
            </aside>

            <!-- content -->
            <div class="content-wrapper">

                <?php 
                $select = $_GET['link'];
                switch ($select) {
                    case 'cs':
                        include 'data_custom.php';
                        break;
                    case 'po':
                        include 'data_po.php';
                        break; 
                    case 'p':
                        include 'detail-customer.php';
                        break; 
                    case 'st_po':
                        include 'status-po.php';
                        break;
                    case 'detail_bayar':
                        include 'detail-konfirmasi.php';
                        break; 
                    case 'bayar_edit':
                        include 'edit-konfirmasi.php';
                        break;
                    default:
                        include 'data_po.php';
                        break;
                } ?>

              

            </div><!-- /.content-wrapper -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#example').DataTable();
                })
            </script>

        

        <!-- add new calendar event modal -->

        <!-- end content -->

        </div><!-- /.wrapper -->        

        <!-- JavaScript -->
        <script src="../assets/source/js/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../assets/source/js/bootstrap/bootstrap.min.js"></script>
        <script src="../assets/source/js/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/source/js/datatables/dataTables.bootstrap.min.js"></script>


        
        <script src="../assets/source/js/jquery.maskedinput.min.js"></script>
        <script src="../assets/source/js/daterangepicker/moment.min.js"></script>
        <script src="../assets/source/js/daterangepicker/daterangepicker.js"></script>
        <script src="../assets/source/js/bootstrap-datetimepicker.min.js"></script>

        <script src="../assets/source/js/app.min.js"></script>
        <script src="../assets/source/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/source/js/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/source/js/chartjs/Chart.min.js"></script>
        <script src="../assets/source/js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="../assets/source/js/jquery-editable-select.js"></script>
        <script src="../assets/source/js/jquery.multi-select.js"></script>
        
    
    </body>
</html>
