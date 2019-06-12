
        <section class="content-header">
            <h1>
                Customer
                <small>Detail Status</small>
            </h1>
 
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Customer</a></li>
                <li class="active">Data customer</li>
            </ol>
        </section>

            <!-- Main content -->
            <section class="content">
            <!-- /.row -->
                <br />
                <!-- Main row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user"></i> Data Status PO </h3> 
                                </div>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM po a
                                 LEFT JOIN produk c ON a.kode= c.kode  WHERE a.nopo='$_GET[kd]'");
                                $data  = mysqli_fetch_array($query);
                                ?>
                                <!-- </div> -->
                                <div class="panel-body">
                                <table id="example" class="table table-hover table-bordered">
                                    <tr>
                                    <td>No PO</td>
                                    <td><?php echo $data['nopo']; ?></td>
                                    </tr>
                                    <tr>
                                    <td width="250">Nama Produk</td>
                                    <td width="550"><?php echo $data['nama']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Color</td>
                                    <td><?php echo $data['color']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Size</td>
                                    <td><?php echo $data['size']; ?></td>
                                    </tr>
                                    <?php
                                    if ($data['no_surat_jalan'] > 0) { ?>
                                        <tr>
                                        <td>Tanggal Kirim</td>
                                        <td><?php echo $data['tgl_kirim']; ?></td>
                                        </tr>
                                        <tr>
                                        <td>No Surat Jalan</td>
                                        <td><?php echo $data['no_surat_jalan']; ?></td>
                                        </tr>
                                        
                                    <?php } ?>
                                    <tr>
                                    <td>Status</td>
                                    <td><?php echo $data['status']; ?></td>
                                    </tr>
                                </table>
                            </div> 
                        </div>
                    </div><!-- col-lg-12--> 
                </div><!-- /.row (main row) -->

            </section><!-- /.content -->
            <section class="col-lg-12 connectedSortable"> 
                <div class="panel panel-info">
                <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-tag"></span> Konfirmasi Pembayaran </h3> 
                </div>
                <div class="panel-body">
                <!-- <div class="table-responsive"> -->
                    <?php
                    $query3="SELECT * from konfirmasi where nopo='$_GET[kd]'";
                    $hasil2=mysqli_query($koneksi, $query3) or die(mysqli_error());
                    ?>
                    <table id="example" class="table table-hover table-bordered">
                    <thead>
                    <tr>
                    <th><center>ID </center></th>
                    <th><center>No PO</i></center></th>
                    <th><center>Pembayaran</center></th>
                    <th><center>Tanggal </center></th>
                    <th><center>Jumlah </center></th>
                    <th><center>Status</center></th>
                    <th><center>Tools </center></th>
                    </tr>
                    </thead>
                    <?php 
                    while($data2=mysqli_fetch_array($hasil2))
                    { ?>
                    <tbody>
                    <td><center><?php echo $data2['id_kon'];?></center></td>
                    <td><center><?php echo $data2['nopo'];?></center></td>
                    <td><center><?php echo $data2['bayar_via'];?></center></td>
                    <td><center><?php echo $data2['tanggal'];?></center></td>
                    <td><center>Rp. <?php echo number_format($data2['jumlah'],2,",",".");?></center></td>
                    <td><center><?php
                    if($data2['status'] == 'Bayar'){
                    echo '<span class="label label-success">Sudah di Bayar</span>';
                    }
                    else if ($data2['status'] == 'Belum' ){
                    echo '<span class="label label-danger">Belum di Bayar</span>';
                    }else{
                        echo $data2['status'];
                    }
                    ?>

                    </center></td>
                    <td><center><div id="thanks"><a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Detail Pembayaran" href="index1.php?link=detail_bayar&kd=<?php echo $data2['id_kon'];?>"><span class="glyphicon glyphicon-search"></span></a> 
                    <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Konfirmasi Prmbayaran" href="index1.php?link=bayar_edit&kode=<?php echo $data2['id_kon'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                    </div></center></td>
                    </tr></div>
                    <?php   
                    } 
                    ?>
                </tbody>
                </table>
                <!-- </div>-->
                </div> 
            </section><!-- right col -->
