<?php include('header.php'); ?>

    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Administrator
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['fullname']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo $_SESSION['gambar']; ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $_SESSION['fullname']; ?>
                                    
                                    </p>
                                </li>
                                <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>

                                <!-- Menu Body -->
                                <?php include "menu1.php"; ?>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="detail-admin.php?hal=edit&kd=<?php echo $_SESSION['user_id'];?>" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../logout.php" class="btn btn-default btn-flat" onclick="return confirm ('Apakah Anda Akan Keluar.?');"> Keluar </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo $_SESSION['gambar']; ?>" class="img-circle" alt="User Image" style="border: 2px solid #3C8DBC;" />
                        </div>
                        <div class="pull-left info">
                            <p>Selamat Datang,<br /><?php echo $_SESSION['fullname']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <?php include "menu.php"; ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Purchase Order
                        <small>Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Purchase Order</a></li>
                        <li class="active">Edit PO</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <?php
            $kd = $_GET['kode'];
			$sql = mysqli_query($koneksi, "SELECT * FROM po_terima WHERE id='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: po-terima.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			
			//if(isset($_GET['pesan']) == 'sukses'){
			//	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			//}
			?>
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Edit PO Terima</h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="update-po-terima.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                              <div class="col-sm-8">
                                  <input name="id" type="text" id="id" value="<?php echo $row['id']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No PO</label>
                              <div class="col-sm-3">
                            <input name="nopo" type="text" id="nopo" value="<?php echo $row['nopo']; ?>" class="form-control" autocomplete="off" readonly="readonly" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Customer</label>
                              <div class="col-sm-3">
                            <input name="kd_cus" type="text" id="kd_cus" value="<?php echo $row['kd_cus']; ?>" class="form-control" autocomplete="off" readonly="readonly" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                              <div class="col-sm-3">
                            <input name="kode" type="text" id="kode" value="<?php echo $row['kode']; ?>" class="form-control" autocomplete="off" readonly="readonly" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-3">
                            <input name="tanggal" type="text" id="tanggal" value="<?php echo $row['tanggal']; ?>" class="form-control" autocomplete="off" readonly="readonly" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Style</label>
                              <div class="col-sm-3">
                            <input name="style" type="text" id="style" value="<?php echo $row['style']; ?>" class="form-control" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Color</label>
                              <div class="col-sm-3">
                            <input name="color" type="text" id="color" value="<?php echo $row['color']; ?>" class="form-control" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Size</label>
                              <div class="col-sm-3">
                            <select id="size" name="size" class="form-control" required>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                            </select>
                              
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Size Sebelumnya</label>
                              <div class="col-sm-3">
                            <span class="label label-warning"><?php echo $row['size']; ?></span>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">QTY</label>
                              <div class="col-sm-3">
                            <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $row['qty']; ?>" readonly="readonly" />
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total</label>
                              <div class="col-sm-3">
                            <input type="text" class="form-control" id="total" name="total" value="<?php echo $row['total']; ?>" readonly="readonly" />
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="po-terima.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
                  </div>
                  </div>
          		</div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


<?php include('footer.php'); ?>
