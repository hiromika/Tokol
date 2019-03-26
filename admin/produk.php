<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Produk
        </h1>
        <ol class="breadcrumb">
        Produk
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Daftar Produk</h3>
                        <a href="input-produk.php" class="btn btn-xs btn-info pull-right">Tambah Produk</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                            <?php
                            if(isset($_GET['hal']) == 'hapus'){
                                $kode = $_GET['kd'];
                                $cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode='$kode'");
                                if(mysqli_num_rows($cek) == 0){
                                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                                }else{
                                    $delete = mysqli_query($koneksi, "DELETE FROM produk WHERE kode='$kode'");
                                    if($delete){
                                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
                                    }else{
                                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
                                    }
                                }
                            }
                            ?>
                             <table id="tb_produk" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th><center>No </center></th>
                                        <th><center>Nama Produk </i></center></th>
                                        <th><center>Jenis </center></th>
                                        <th><center>Harga </center></th>
                                        <th><center>Keterangan </center></th>
                                        <th><center>Stok </center></th>
                                        <th><center>Pengaturan</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $query1="SELECT * FROM produk";
                                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                    $no=0;
                                    while($data=mysqli_fetch_array($tampil)){ 
                                        $no++; 
                                        ?>
                                        <tr>
                                            <td><center><?php echo $no; ?></center></td>
                                            <td><a href="detail-produk.php?hal=edit&kd=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-tag"></span> <?php echo $data['nama'];?></a></td>
                                            <td><center><?php echo $data['jenis'];?></center></td>
                                            <td>Rp. <?php echo number_format($data['harga'],2,",",".");?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td><center><?php echo $data['stok']; ?></center></td>
                                            <td>
                                                <center>
                                                    <a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Detail Produk" href="detail-produk.php?hal=edit&kd=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-info-sign"></span></a>  
                                                    <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Produk" href="edit-produk.php?hal=edit&kode=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                    <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Produk" href="produk.php?hal=hapus&kd=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-trash"></span></a>
                                                </center>
                                            </td>
                                        </tr>   
                                        <?php   
                                    } 
                                    ?>
                                </tbody>
                            </table>
                         

                        <!--PAGE CONTENT ENDS-->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->
<script type="text/javascript">
    $(function(){
        $('#tb_produk').DataTable();
    });
</script>

<?php include 'footer.php'; ?>


