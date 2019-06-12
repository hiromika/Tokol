<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Detail PO
        </h1>
        <ol class="breadcrumb">
        Detail PO
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail PO</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        <section class="content">
                          <?php
                          $kd = $_GET['kode'];
                          $sql = mysqli_query($koneksi, "SELECT * FROM po WHERE nopo='$kd'");
                          if(mysqli_num_rows($sql) == 0){
                            header("Location: po-terima.php");
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
                                  <h3 class="panel-title"><i class="fa fa-user"></i> Detail PO</h3> 
                                </div>
                                <div class="panel-body">
                                  <div class="form-panel">
                                    <form class="form-horizontal style-form" action="update-po-terima.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
                                           <div class="col-sm-3" style="margin-top: 7px;">
                                            <a href="detail-customer.php?hal=edit&kd=<?php echo $row['kd_cus'];?>">
                                            <span class="glyphicon glyphicon-user"/> Info Customer</span></a>
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
                                        <label class="col-sm-2 col-sm-2 control-label">Color</label>
                                        <div class="col-sm-3">
                                          <input name="color" readonly="" type="text" id="color" value="<?php echo $row['color']; ?>" class="form-control" autocomplete="off" required />

                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Size</label>
                                        <div class="col-sm-3">
                                          <input name="size" readonly="" type="text" id="size" value="<?php echo $row['size']; ?>" class="form-control" autocomplete="off" required />

                                         <!--  <select id="size" name="size" readonly class="form-control" required>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                            <option value="XXXL">XXXL</option>
                                          </select>
 -->
                                        </div>
                                      <!--   <label class="col-sm-2 col-sm-2 control-label">Size Sebelumnya</label>
                                        <div class="col-sm-3">
                                          <span class="label label-warning"><?php echo $row['size']; ?></span>
                                        </div> -->
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
                                      <?php
                                        if ($row['no_surat_jalan'] > 0) { ?>
                                        <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Tanggal Kirim</label>
                                          <div class="col-sm-3">
                                            <input type="text" class="form-control" id="tgl_kirim" name="tgl_kirim" value="<?php echo $row['tgl_kirim']; ?>" readonly="readonly" />
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">No Surat Jalan</label>
                                          <div class="col-sm-3">
                                            <input type="text" class="form-control" id="no_surat_jalan" name="no_surat_jalan" value="<?php echo $row['no_surat_jalan']; ?>" readonly="readonly" />
                                          </div>
                                        </div>
                                      <?php   }
                                      ?>
                               <!--        <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                          <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                          <a href="po-terima.php" class="btn btn-sm btn-danger">Batal </a>
                                        </div>
                                      </div> -->
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div><!-- col-lg-12--> 
                          </div><!-- /.row (main row) -->

                        </section><!-- /.content -->
                         

                        <!--PAGE CONTENT ENDS-->
                        
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    })
</script>
<?php include 'footer.php'; ?>

