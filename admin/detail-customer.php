<?php include('header.php'); ?>
<div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Customer
                        <small>Administrator</small>
                    </h1>
             <?php
             /**if(isset($_GET['hal']) == 'hapus'){
				$kd_dept = $_GET['kd'];
				$cek = mysqli_query($koneksi, "SELECT * FROM departemen WHERE kd_dept='$kd_dept'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM departemen WHERE kd_dept='$kd_dept'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}**/
			?>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Customer</a></li>
                        <li class="active">Data customer</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Data Customer </h3> 
                        </div>
                        <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE kd_cus='$_GET[kd]'");
                    $data  = mysqli_fetch_array($query);
                    ?>
                                <!-- </div> -->
                                <div class="panel-body">
                      <table id="example" class="table table-hover table-bordered">
                    <tr>
                    <td>Kode</td>
                    <td><?php echo $data['kd_cus']; ?></td>
                    <td rowspan="9"><div class="pull-right image">
                            <img src="<?php echo $data['gambar']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
                        </div></td>
                    </tr>
                    <tr>
                    <td width="250">Nama</td>
                    <td width="550"><?php echo $data['nama']; ?></td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td><?php echo $data['alamat']; ?></td>
                    </tr>
                    <tr>
                    <td>No Telepon</td>
                    <td><?php echo $data['no_telp']; ?></td>
                    </tr>
                    <tr>
                    <td>Username</td>
                    <td><?php echo $data['username']; ?></td>
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td><?php echo $data['password']; ?></td>
                    </tr>
                   </table>
                  
                <div class="text-right">
                <a href="customer.php" class="btn btn-sm btn-warning"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                </div>  
                                </div> 
              </div>
            </div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

<?php include('footer.php'); ?>
