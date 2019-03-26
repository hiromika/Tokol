<?php include 'header.php' ; ?>
<style type="text/css" media="screen">
    .small-box .icon{
    top: 0px !important;
    }
</style>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Dashboard
        </h1>
        <ol class="breadcrumb">
        dashboard
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dashboard</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                            

                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <?php $tampil=mysqli_query($koneksi, "SELECT * from produk order by kode desc");
                                $total=mysqli_num_rows($tampil);
                                ?>
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3>
                                            <?php echo "$total"; ?>
                                        </h3>
                                        <p>
                                            Jumlah Produk
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <span class="glyphicon glyphicon-tag"></span>
                                    </div>
                                    <a href="produk.php" class="small-box-footer">
                                        Lihat Detail Produk <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div><!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <?php $tampil1=mysqli_query($koneksi, "SELECT * from po_terima order by nopo desc");
                                $dept=mysqli_num_rows($tampil1);
                                ?>
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>
                                            <?php echo "$dept"; ?> <!--<sup style="font-size: 20px">%</sup>-->
                                        </h3>
                                        <p>
                                            PO (Purchase Order)
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <span class="glyphicon glyphicon-usd"></span>
                                    </div>
                                    <a href="po-terima.php" class="small-box-footer">
                                        Lihat Detail PO <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div><!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <?php $tampil2=mysqli_query($koneksi, "SELECT * from user WHERE role = 2 order by id_user desc");
                                $pel=mysqli_num_rows($tampil2);
                                ?>
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>
                                            <?php echo "$pel"; ?> 
                                        </h3>
                                        <p>
                                            Customer
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                    <a href="customer.php" class="small-box-footer">
                                        Lihat Detail Customer <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div><!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <?php $tampil3=mysqli_query($koneksi, "SELECT * from user  WHERE role = 1 order by id_user desc");
                                $user=mysqli_num_rows($tampil3);
                                ?>
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>
                                            <?php echo "$user"; ?>
                                        </h3>
                                        <p>
                                            Admin
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </div>
                                    <a href="admin.php" class="small-box-footer">
                                        Lihat Detail Admin <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div><!-- ./col -->
                        </div><!-- /.row -->

                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-7 connectedSortable">                            


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user"></i> Data Produk </h3> 
                                    </div>
                                    <div class="panel-body">
                                        <!-- <div class="table-responsive"> -->
                                            <?php
                                            $query1="SELECT * from produk order by kode DESC limit 5";
                                            $hasil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                            ?>
                                            <table id="example" class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><center>No </center></th>
                                                        <th><center>Kode </center></th>
                                                        <th><center>Produk</i></center></th>
                                                        <th><center>Harga </center></th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                $no=0;
                                                while($data=mysqli_fetch_array($hasil))
                                                    { $no++; ?>
                                                        <tbody>
                                                            <td><center><?php echo $no; ?></center></td>
                                                            <td><center><?php echo $data['kode'];?></center></td>
                                                            <td><a href="detail-karyawan.php?hal=edit&kd=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-user"></span> <?php echo $data['nama'];?></td>
                                                                <td><center>Rp. <?php echo number_format($data['harga'],2,",",".");?></center></td>
                            <!--<td><center><?php
                            /**if($data['status'] == 'tetap'){
                            echo '<span class="label label-success">Tetap</span>';
                            }
                            else if ($data['status'] == 'kontrak' ){
                            echo '<span class="label label-primary">Kontrak</span>';
                            }
                            else if ($data['status'] == 'magang' ){
                            echo '<span class="label label-info">Magang</span>';
                            }
                            else if ($data['status'] == 'outsource' ){
                            echo '<span class="label label-warning">Outsourcing</span>';
                            }**/

                            ?></center></td>-->
                            </tr></div>
                            <?php   
                            } 
                            ?>
                            </tbody>
                            </table>
                            <!-- </div>-->
                            <div class="text-right">
                                <a href="produk.php" class="btn btn-sm btn-primary">Menu Produk <i class="fa fa-arrow-circle-right"></i></a>

                            </div>
                            </div> 
                            </div>


                            </section><!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-5 connectedSortable"> 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user"></i> Data Admin </h3> 
                                    </div>
                                    <div class="panel-body">
                                        <!-- <div class="table-responsive"> -->
                                            <?php
                                            $query2="SELECT * from user  WHERE role = 1 order by id_user desc limit 5";
                                            $hasil1=mysqli_query($koneksi, $query2) or die(mysqli_error());
                                            ?>
                                            <table id="example" class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><center>No </center></th>
                                                        <th><center>Username </center></th>
                                                        <th><center>Fullname </center></th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                $no=0;
                                                while($data1=mysqli_fetch_array($hasil1))
                                                    { $no++; ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><center><?php echo $no; ?></center></td>
                                                                <td><center><a href="detail-admin.php?hal=edit&kd=<?php echo $data1['id_user'];?>"><span class="glyphicon glyphicon-user"></span> <?php echo $data1['username']; ?></a></center></td>
                                                                <td><center><?php echo $data1['nama']; ?></center></td>
                            <!--<td><center><?php 
                            /**if($data1['level'] == 'admin'){
                            echo '<span class="label label-success">Admin</span>';
                            }
                            else if ($data1['level'] == 'superuser' ){
                            echo '<span class="label label-primary">Super User</span>';
                            }
                            else if ($data1['level'] == 'user' ){
                            echo '<span class="label label-info">User</span>';
                            }**/
                            ?></center></td>-->
                            </tr></div>
                            <?php   
                            } 
                            ?>
                            </tbody>
                            </table>
                            <!-- </div>-->
                            <div class="text-right">
                                <a href="admin.php" class="btn btn-sm btn-info">Menu Admin <i class="fa fa-arrow-circle-right"></i></a>

                            </div>
                            </div> 

                        <!--PAGE CONTENT ENDS-->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
