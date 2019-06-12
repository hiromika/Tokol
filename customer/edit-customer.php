
    <section class="content-header">
        <h1>
            Customer
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Customer</a></li>
            <li class="active">Edit Customer</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
    $kd = $_GET['kd_cus'];
			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE kd_cus='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: customer.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			/**if(isset($_POST['update'])){
				$kd_dept	 = $_POST['kd_dept'];
				$nik		 = $_POST['nik'];
				$departemen	 = $_POST['departemen'];
				$jabatan	 = $_POST['jabatan'];
				$gaji_pokok  = $_POST['gaji_pokok'];
                $tunjangan   = $_POST['tunjangan'];
				
				$update = mysqli_query($koneksi, "UPDATE departemen SET nik='$nik', departemen='$departemen', jabatan='$jabatan', gaji_pokok='$gaji_pokok', tunjangan='$tunjangan' WHERE kd_dept='$kd_dept'") or die(mysqli_error());
				if($update){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}**/
			
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
                        <h3 class="panel-title"><i class="fa fa-user"></i> Edit Data Customer </h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="update-customer.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group" style="display: none;">
                              <label class="col-sm-2 col-sm-2 control-label">ID User</label>
                              <div class="col-sm-8">
                                  <input name="kd_cust" type="text" id="kd_cust" value="<?php echo $row['kd_cus']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-3">
                            <input name="username" type="text" id="username" readonly="" value="<?php echo $row['username']; ?>" class="form-control" autocomplete="off" placeholder="Username" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-3">
                            <input name="nama" type="text" id="nama" value="<?php echo $row['nama']; ?>" class="form-control" autocomplete="off" placeholder="Nama Customer" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-3">
                            <input name="alamat" type="text" id="alamat" value="<?php echo $row['alamat']; ?>" class="form-control" autocomplete="off" placeholder="Alamat Customer" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                              <div class="col-sm-3">
                            <input name="no_telp" type="text" id="no_telp" value="<?php echo $row['no_telp']; ?>" class="form-control" autocomplete="off" placeholder="No Telepon" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto Sebelumnya</label>
                            
                              <div class="col-sm-3">
                            <img src="../admin/<?php echo $row['gambar']; ?>" class="img-rounded" width="150" height="200" style="border: 2px solid #666;" /> 
                            </div>
                          </div>
                          <div class="form-group">
                          
                              <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                              <div class="col-sm-3">
                            <input name="nama_file" type="file" id="nama_file" class="form-control"/>
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">New Password</label>
                              <div class="col-sm-3">
                            <input name="password" type="text" id="password" value="" class="form-control" autocomplete="off" placeholder="New Password" autocomplete="off" />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="index1.php?link=p&kd_cus=<?php echo $row['kd_cus']; ?>" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
                  </div>
                  </div>
          		</div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
