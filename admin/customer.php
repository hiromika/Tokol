<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Customer
        </h1>
        <ol class="breadcrumb">
        Customer
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Customer</h3>
                        <a href="input-customer.php" class="btn btn-xs btn-warning pull-right">Tambah Customer <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->

                        <?php
                        if(isset($_GET['hal']) == 'hapus'){
                            $kd_cus = $_GET['kd'];
                            $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE kd_cus='$kd_cus'");
                            if(mysqli_num_rows($cek) == 0){
                                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                            }else{
                                $delete = mysqli_query($koneksi, "DELETE FROM user WHERE kd_cus='$kd_cus'");
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
                                <!-- Main row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-user"></i> Data Customer </h3> 
                                            </div>
                                            <div class="panel-body">
                                                <!-- <div class="table-responsive"> -->
                                                    <?php
                                                    $query1="SELECT * from user WHERE role = 2";

                                                    if(isset($_POST['qcari'])){
                                                        $qcari=$_POST['qcari'];
                                                        $query1="SELECT * FROM  user 
                                                        where kd_cus AND role = 2 like '%$qcari% '
                                                        or nama AND role = 2 like '%$qcari%'  ";
                                                    }
                                                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                                    ?>
                                                    <table id="example" class="table table-hover table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><center>No </center></th>
                                                                <th><center>Kode </center></th>
                                                                <th><center>Nama </i></center></th>
                                                                <th><center>Alamat </center></th>
                                                                <th><center>No Telepon </center></th>
                                                                <th><center>Username </center></th>
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
                                                                        <td><center><?php echo $data['kd_cus'];?></center></td>
                                                                        <td><a href="detail-customer.php?hal=edit&kd=<?php echo $data['kd_cus'];?>"><span class="glyphicon glyphicon-user"></span> <?php echo $data['nama'];?></td>
                                                                            <td><?php echo $data['alamat']; ?></td>
                                                                            <td><center><?php echo $data['no_telp']; ?></center></td>
                                                                            <td><center><?php echo $data['username']; ?></center></td>
                                                                            <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Customer" href="edit-customer.php?hal=edit&kd_cus=<?php echo $data['kd_cus'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                                                <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus customer" href="customer.php?hal=hapus&kd=<?php echo $data['kd_cus'];?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr></div>
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

