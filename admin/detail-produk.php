<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Produk
        </h1>
        <ol class="breadcrumb">
        Detail Produk
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Produk</h3>
                        <a href="produk.php" class="btn btn-xs btn-warning pull-right"> Kembali <i class="fa fa-arrow-circle-right"></i></a>                  
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        <!-- Main row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-user"></i> Data Produk </h3> 
                                            </div>
                                            <?php
                                            $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode='$_GET[kd]'");
                                            $data  = mysqli_fetch_array($query);
                                            ?>
                                            <!-- </div> -->
                                            <div class="panel-body">
                                                <table id="example" class="table table-responsive">
                                                    <tr>
                                                        <th>Kode</th>
                                                        <td><?php echo $data['kode']; ?></td>
                                                        <td rowspan="9"><div class="pull-right image">
                                                            <img src="<?php echo $data['gambar']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <th width="250">Nama</th>
                                                        <td width="550"><?php echo $data['nama']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis</th>
                                                        <td><?php echo $data['jenis']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Harga</th>
                                                        <td><?php echo number_format($data['harga'],2,",",".");?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?php echo $data['keterangan']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total Stok</th>
                                                        <td><?php echo $data['stok']; ?> Pcs</td>
                                                    </tr>
                                                </table>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table-responsive table" id="tb_stock">
                                                            <caption>Daftar stok detail</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Warna</th>
                                                                    <th>Ukuran</th>
                                                                    <th>Stok</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no = 1; 

                                                                $que = "SELECT * FROM produk_stock WHERE id_produk='$_GET[kd]'";
                                                                $sq = mysqli_query($koneksi,$que);

                                                                while ($value = mysqli_fetch_array($sq)) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $no++; ?></td>
                                                                    <th><?php echo $value['warna'] ?></th>
                                                                    <th><?php echo $value['ukuran'] ?></th>
                                                                    <th><?php echo $value['stock_warna'] ?></th>
                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col-lg-12--> 
                        </div><!-- /.row (main row) -->



                        <!--PAGE CONTENT ENDS-->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->

<script type="text/javascript">
    $(document).ready(function (argument) {
        $('#tb_stock').DataTable();
    })
</script>

<?php include 'footer.php'; ?>

