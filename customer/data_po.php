
            <section class="content-header">
      
                    <h1>
                    Daftar Purchase Order
                    </h1>
                    <ol class="breadcrumb">
                    Daftar Purchase Order
                    </ol>
                </section>
                <br />
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Daftar Purchase Order</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!--PAGE CONTENT BEGINS-->
                                    
                                     <?php
                        $kodeku = $_SESSION['user_id'];
                        $query1="SELECT * FROM po a
                        LEFT JOIN produk c ON a.kode = c.kode  
                        where a.kd_cus='$kodeku' ORDER BY a.nopo DESC";
                        $hasil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                        ?>
                        <table id="example" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th><center>No PO</i></center></th>
                                <th><center>Nama Produk </center></th>
                                <th><center>Tanggal </center></th>
                                <th><center>Color </center></th>
                                <th><center>Size </center></th>
                                <th><center>Qty </center></th>
                                <th><center>Total </center></th>
                                <th><center>Status </center></th>
                                <th><center>Option </center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        while($data=mysqli_fetch_array($hasil))
                        { ?>
                            <tr>
                                <td><center><?php echo $data['nopo'];?></center></td>
                                <td><center><?php echo $data['nama'];?></center></td>
                                <td><center><?php echo $data['tanggal'];?></center></td>
                                <td><center><?php echo $data['color'];?></center></td>
                                <td><center><?php echo $data['size'];?></center></td>
                                <td><center><?php echo $data['qty'];?></center></td>
                                <td><center>Rp. <?php echo number_format($data['total'],2,",",".");?></center></td>
                                <td><center><?php echo $data['status']; ?>
                                        
                                    </center></td>
                                <td><center><div id="thanks"><a class="btn btn-sm btn-danger" data-placement="bottom" data-toggle="tooltip" title="Cetak Invoice" href="cetak-po.php?hal=cetak&kd=<?php echo $data['nopo'];?>"><span class="glyphicon glyphicon-print"></span></a> 
                                <a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Status PO" href="./index1.php?link=st_po&kd=<?php echo $data['nopo'];?>"><span class="glyphicon glyphicon-tag"></span></a> 
                                <?php if ($data['status'] == 'Barang Telah Dikirim') { ?>
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Konfirmasi Terima Barang" href="kon-po-terima.php?hal=edit&kode=<?php echo $data['nopo'];?>"><span class="glyphicon glyphicon-check"></span></a>  
                                </div></center></td>
                            <?php } ?>
                            </tr>
                            </div>
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