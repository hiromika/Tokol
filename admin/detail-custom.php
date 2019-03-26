<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Custom
        </h1>
        <ol class="breadcrumb">
        Custom
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Custom</h3>
                        <a href="custom.php" class="btn btn-xs btn-warning pull-right"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        <section class="content">
                            <!-- /.row -->
                            <br />
                            <!-- Main row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-user"></i> Data Pesanan Custom </h3> 
                                        </div>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM custom WHERE kode='$_GET[kd]'");
                                        $data  = mysqli_fetch_array($query);
                                        ?>
                                        <!-- </div> -->
                                        <div class="panel-body">
                                            <table id="example" class="table table-responsive table-bordered">
                                                <tr>
                                                    <td>Kode</td>
                                                    <td><?php echo $data['kode']; ?></td>
                                                    <td rowspan="9"><div class="pull-right image">
                                                        <img src="../custom/<?php echo $data['gambar']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td width="250">Tanggal</td>
                                                    <td width="550"><?php echo $data['tanggal']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250">Kode Customer</td>
                                                    <td width="550"><?php echo $data['kd_cus']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="250">Nama</td>
                                                    <td width="550"><?php echo $data['nama']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Size</td>
                                                    <td><?php echo $data['size']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td><?php echo $data['color']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Model</td>
                                                    <td><?php echo $data['model']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Harga</td>
                                                    <!-- <td><?php // echo number_format($data['harga'],0,",",".");?></td> -->
                                                    <td><?php echo $data['harga'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td><?php echo $data['status']; ?> Pcs</td>
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

<?php include 'footer.php'; ?>

