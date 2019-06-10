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
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
             <section class="content-header">
                  
             <?php
             if(isset($_GET['hal']) == 'hapus'){
                $kd_cus = $_GET['kd'];
                $cek = mysqli_query($koneksi, "SELECT * FROM customer WHERE kd_cus='$kd_cus'");
                if(mysqli_num_rows($cek) == 0){
                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                }else{
                    $delete = mysqli_query($koneksi, "DELETE FROM customer WHERE kd_cus='$kd_cus'");
                    if($delete){
                        echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
                    }
                }
            }
            ?>

                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <!-- Main row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-cart-plus"></i> Data Pembayaran </h3> 
                                    </div>
                                    <div class="panel-body">
                                        <!-- <div class="table-responsive"> -->
                                            <?php
                                            $query1="select * from konfirmasi";

                                            if(isset($_POST['qcari'])){
                                                $qcari=$_POST['qcari'];
                                                $query1="SELECT * FROM  konfirmasi 
                                                where pono like '%$qcari%'
                                                or status like '%$qcari%'  ";
                                            }
                                            $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                            ?>
                                            <table id="example" class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><center>No </center></th>
                                                        <th><center>No PO </center></th>
                                                        <th><center>Customer </i></center></th>
                                                        <th><center>Pembayaran </center></th>
                                                        <th><center>Tanggal </center></th>
                                                        <th><center>Jumlah </center></th>
                                                        <th><center>Status </center></th>
                                                        <th><center>Tools</center></th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                $no=0;
                                                while($data=mysqli_fetch_array($tampil))
                                                    { $no++; ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><center><?php echo $no; ?></center></td>
                                                                <td><center><?php echo $data['nopo'];?></center></td>
                                                                <td><center><?php echo $data['kd_cus'];?></center></td>
                                                                <td><center><?php echo $data['bayar_via']; ?></center></td>
                                                                <td><center><?php echo $data['tanggal']; ?></center></td>
                                                                <td><center>Rp. <?php echo number_format($data['jumlah'],2,",",".");?></center></td>
                                                                <td><center><?php
                                                                if($data['status'] == 'Bayar'){
                                                                    echo '<span class="label label-success">Sudah di Bayar</span>';
                                                                }
                                                                else if ($data['status'] == 'Belum' ){
                                                                    echo '<span class="label label-danger">Belum di Bayar</span>';
                                                                }else{
                                                                    echo $data['status'];
                                                                }
                                                                ?>

                                                            </center></td>
                                                            <td><center><div id="thanks"><a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Detail Konfirmasi" href="detail-konfirmasi.php?hal=detail&kd=<?php echo $data['id_kon'];?>"><span class="glyphicon glyphicon-search"></span></a>  
                                                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Konfirmasi" href="edit-konfirmasi.php?hal=edit&kode=<?php echo $data['id_kon'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                            </center></td></tr></div>
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

