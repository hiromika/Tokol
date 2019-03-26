<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Konfirmasi
        </h1>
        <ol class="breadcrumb">
        Konfirmasi
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Konfirmasi</h3>
                        <a href="konfirmasi.php" class="btn btn-xs btn-warning pull-right"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                            
                        <section class="content">
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
                                                        <img src="<?php echo $data['bukti_transfer']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
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
                                                    }
                                                    ?></td>
                                                </tr>
                                            </table>
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

