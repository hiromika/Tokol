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
                        <h3 class="box-title">Data Custom</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                    
                        <?php
                        if(isset($_GET['hal']) == 'hapus'){
                            $kode = $_GET['kd'];
                            $cek = mysqli_query($koneksi, "SELECT * FROM custom WHERE kode='$kode'");
                            if(mysqli_num_rows($cek) == 0){
                                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                            }else{
                                $delete = mysqli_query($koneksi, "DELETE FROM custom WHERE kode='$kode'");
                                if($delete){
                                    echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
                                }else{
                                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
                                }
                            }
                        }
                        ?>
                          

                        <!-- Main content -->
                        <section class="content">

                            <!-- Small boxes (Stat box) -->
                            <div class="row">


                            </div>
                            <!-- /.row -->
                            <br />
                            <!-- Main row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-user"></i> Data Custom </h3> 
                                        </div>
                                        <div class="panel-body">
                                            <!-- <div class="table-responsive"> -->
                                                <?php
                                                $query1="select * from custom";


                                                $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                                ?>
                                                <table id="example" class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th><center>Kode </center></th>
                                                            <th><center>Tanggal </center></th>
                                                            <th><center>Kode Customer</i></center></th>
                                                            <th><center>Nama </center></th>
                                                            <th><center>Size </center></th>
                                                            <th><center>Color </center></th>
                                                            <th><center>Model </center></th>
                                                            <th><center>Foto Design </center></th>
                                                            <th><center>Harga </center></th>
                                                            <th><center>Status </center></th>
                                                            <th><center>Aksi </center></th>

                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                    $no=0;
                                                    while($data=mysqli_fetch_array($tampil))
                                                        { $no++; ?>
                                                            <tbody>
                                                                <tr>
                                                                    <td><center><?php echo $data['kode'];?> </center></td>
                                                                    <td><center><?php echo $data['tanggal'];?></center></td>
                                                                    <td><center><?php echo $data['kd_cus'];?></center></td> 
                                                                    <td><a href="detail-custom.php?kd=<?php echo $data['kode']; ?>" data-placement="bottom" data-toggle="tooltip" title="Detail Pesanan"><span class="glyphicon glyphicon-user"> </span> <?php echo $data['nama'];?></a></td>
                                                                    <td><center><?php echo $data['size'];?></center></td>
                                                                    <td><center><?php echo $data['color'];?></center></td>
                                                                    <td><center><?php echo $data['model'];?></center></td>
                                                                    <td><center><img src="../assets/custom/<?php echo $data['gambar'];?>" height="60" width="60" class="img-circle" /></center></td>
                                                                    <td><center><?php echo number_format($data['harga'],0,",","."); ?></center></td>
                                                                    <td><center><?php echo $data['status'];?></center></td>
                                                                    <td><center><div id="thanks">
                                                                        <a href="detail-custom.php?kd=<?php echo $data['kode']; ?>" data-placement="bottom" data-toggle="tooltip" title="Detail Pesanan" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                                        <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Produk" href="edit-custom.php?hal=edit&kode=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                                        <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Produk" href="custom.php?hal=hapus&kd=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-trash"></a></center></td>
                                                                        </tr></div>
                                                                        <?php   
                                                                    } 
                                                                    ?>
                                                                </tbody>
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


