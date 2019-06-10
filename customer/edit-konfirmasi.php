
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
			$sql = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_kon='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: konfirmasi.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}

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
                      <form class="form-horizontal style-form" action="update-konfirmasi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
                              <label class="col-sm-2 col-sm-2 control-label">Metode Bayar</label>
                              <div class="col-sm-3">
                           
                              <select id="bayar_via" name="bayar_via" class="form-control" autofocus="on" required>
                            <option value=""> -- Pilih Pembayaran -- </option>
                              <?php
                                $query1="select * from bank";
                                $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                while($data=mysqli_fetch_array($tampil))
                                {
                                ?>
                              
              							<option value="<?php echo $data['nama_bank'];?>"><?php echo $data['nama_bank'];?> - <?php echo $data['no_rek'];?> - <?php echo $data['nasabah'];?></option>
              						    <?php } ?>

                            </select>
                            </div>
                            
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                              <div class="col-sm-3">
                            <input name="jumlah" type="number" readonly="" id="jumlah" value="<?php echo number_format($row['jumlah'],0,",","."); ?>" class="form-control" autocomplete="off"/>
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Bukti Transfer</label>
                            
                              <div class="col-sm-3">
                              <input type="file" name="nama_file" id="nama_file" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group">
                          
                              <!--<label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-3">
                            <select id="status" name="status" class="form-control" autofocus="on" required>
                            <option> -- Pilih Status -- </option>
                            <!--<option value="Bayar">Sudah di Bayar</option>
                            <option value="Belum">Belum di Bayar</option>
                            </select>
                              
                            </div>-->
                            <label class="col-sm-2 col-sm-2 control-label">Status : </label>
                            <div class="col-sm-3">
                            <?php
                            if($row['status'] == 'Bayar'){
								echo '<span class="label label-success">Sudah di Bayar</span>';
							}
                            else if ($row['status'] == 'Belum' ){
								echo '<span class="label label-danger">Belum di Bayar</span>';
							}else{
                echo $row['status'];
              }
                    ?>
                            
                            </span>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Konfirmasi" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="index1.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
                  </div>
                  </div>
          		</div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
 <script>

	// $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
	
 </script>