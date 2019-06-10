
                <section class="content-header">
                    <h1>
                        Konfirmasi
                    </h1>

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Konfirmasi</a></li>
                        <li class="active">Detail Konfirmasi</li>
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
                        <h3 class="panel-title"><i class="fa fa-user"></i> Data Konfirmasi </h3> 
                        </div>
                        <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_kon='$_GET[kd]'");
                    $data  = mysqli_fetch_array($query);
                    ?>
                                <!-- </div> -->
                                <div class="panel-body">
                      <table id="example" class="table table-hover table-bordered">
                    <tr>
                    <td>No PO</td>
                    <td><?php echo $data['nopo']; ?></td>
                    <td rowspan="9"><div class="pull-right image">
                            <img src="<?php echo $data['bukti_transfer']; ?>" class="img-rounded" height="300" width="250" alt="Image" style="border: 3px solid #333333;" />
                        </div></td>
                    </tr>
                    <tr>
                    <td width="250">Kode Customer</td>
                    <td width="550"><?php echo $data['kd_cus']; ?></td>
                    </tr>
                    <tr>
                    <td>Pembayaran</td>
                    <td><?php echo $data['bayar_via']; ?></td>
                    </tr>
                    <tr>
                    <td>Tanggal</td>
                    <td><?php echo $data['tanggal']; ?></td>
                    </tr>
                    <tr>
                    <td>Jumlah</td>
                    <td>Rp. <?php echo number_format($data['jumlah'],2,",",".");?></td>
                    </tr>
                    <tr>
                    <td>Status</td>
                    <td><?php
                            if($data['status'] == 'Bayar'){
								echo '<span class="label label-success">Sudah di Bayar</span>';
							}
                            else if ($data['status'] == 'Belum' ){
								echo '<span class="label label-danger">Belum di Bayar</span>';
							}else{
                                echo $data['status'];
                            }
                    ?></td>
                    </tr>
                   </table>
                  
                <div class="text-right">
                <a href="index1.php" class="btn btn-sm btn-warning"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                </div>  
                                </div> 
              </div>
            </div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
