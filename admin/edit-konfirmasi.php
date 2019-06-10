<?php include('header.php'); ?>
<div class="content-wrapper">

                <section class="content-header">
                    <h1>
                        Konfirmasi
                        <small>Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Konfirmasi</a></li>
                        <li class="active">Edit Konfirmasi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <?php
            $kd = $_GET['kode'];
			$sql = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE nopo='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: konfirmasi.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['update'])){
				$id_kon	        = $_POST['id_kon'];
				$nopo	          = $_POST['nopo'];
				$kd_cus	        = $_POST['kd_cus'];
				$bayar_via      = $_POST['bayar_via'];
				$tanggal        = $_POST['tanggal'];
                $jumlah         = $_POST['jumlah'];
                //$bukti_transfer = $_POST['bukti_transfer'];
                $status         = $_POST['status'];
				
        $update = mysqli_query($koneksi, "UPDATE konfirmasi SET status='$status' WHERE id_kon='$id_kon'") or die(mysqli_error());
        if ($status == "Bayar") {
				    $update2 = mysqli_query($koneksi, "UPDATE po SET status='Pembayaran Telah di konfirmasi, Menuggu Pengiriman' WHERE nopo='$nopo'") or die(mysqli_error());
        }else{
          $update2 = mysqli_query($koneksi, "UPDATE po SET status='Pembayaran di Tolak Oleh Admin' WHERE nopo='$nopo'") or die(mysqli_error());
        }
				if($update){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
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
                        <h3 class="panel-title"><i class="fa fa-user"></i> Edit Konfirmasi Pembayaran </h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Konfirmasi</label>
                              <div class="col-sm-3">
                                  <input name="id_kon" type="text" id="id_kon" value="<?php echo $row['id_kon']; ?>" class="form-control" autocomplete="off" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No PO</label>
                              <div class="col-sm-3">
                            <input name="nopo" type="text" id="nopo" value="<?php echo $row['nopo']; ?>" class="form-control" autocomplete="off" readonly="readonly"/>
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Customer</label>
                              <div class="col-sm-3">
                            <input name="kd_cus" type="text" id="kd_cus" value="<?php echo $row['kd_cus']; ?>" class="form-control" autocomplete="off" readonly="readonly" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Metode Pembayaran</label>
                              <div class="col-sm-3">
                            <input name="bayar_via" type="text" id="bayar_via" value="<?php echo $row['bayar_via']; ?>" class="form-control" autocomplete="off" readonly="readonly" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Pembayaran</label>
                              <div class="col-sm-3">
                            <input name="tanggal" type="text" id="tanggal" value="<?php echo $row['tanggal']; ?>" class="form-control" autocomplete="off" readonly="readonly"/>
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                              <div class="col-sm-3">
                            <input name="jumlah" type="text" id="jumlah" value="<?php echo $row['jumlah']; ?>" class="form-control" autocomplete="off" readonly="readonly"/>
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Bukti Transfer</label>
                            
                              <div class="col-sm-3">
                            <img src="<?php echo $row['bukti_transfer']; ?>" class="img-rounded" width="150" height="200" style="border: 2px solid #666;" /> 
                            </div>
                          </div>
                          <div class="form-group">
                          
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-3">
                            <select id="status" name="status" class="form-control" autofocus="on" required>
                            <option> -- Pilih Status -- </option>
                            <option value="Bayar">Sudah di Bayar</option>
                            <option value="Belum">Belum di Bayar</option>
                            </select>
                              
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Status Sebelumnya : </label>
                            <div class="col-sm-3" style="margin-top: 7px;">
                            <?php
                            if($row['status'] == 'Bayar'){
              								echo '<span class="label label-success">Sudah di Bayar</span>';
              							}
                            else if ($row['status'] == 'Belum' ){
              								echo '<span class="label label-danger">Belum di Bayar</span>';
              							}else{
                              echo '<span class="label label-primary">'.$row['status'].'</span>';
                            }
                            ?>
                            
                            </span>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="konfirmasi.php" class="btn btn-sm btn-danger">Batal </a>
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
