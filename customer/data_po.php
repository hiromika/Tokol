
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
                          <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Dashboard</h3>
                                    <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!--PAGE CONTENT BEGINS-->
                                    
                                     <?php
                        $kodeku = $_SESSION['user_id'];
                        $query1="SELECT *,a.nopo as no_po, a.size as size_, a.color as color_ , a.qty as qty_ , a.style as style_ , c.nama as nama_p from po_terima a 
                        LEFT JOIN po b ON a.nopo= b.nopo  
                        LEFT JOIN produk c ON a.kode= c.kode  
                        where kd_cus='$kodeku'";
                        $hasil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                        ?>
                        <table id="example" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th><center>No PO</i></center></th>
                                <th><center>Kode Produk </center></th>
                                <th><center>Tanggal </center></th>
                                <th><center>Style </center></th>
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
                                <td><center><?php echo $data['no_po'];?></center></td>
                                <td><center><?php echo $data['nama_p'];?></center></td>
                                <td><center><?php echo $data['tanggal'];?></center></td>
                                <td><center><?php echo $data['style_'];?></center></td>
                                <td><center><?php echo $data['color_'];?></center></td>
                                <td><center><?php echo $data['size_'];?></center></td>
                                <td><center><?php echo $data['qty'];?></center></td>
                                <td><center>Rp. <?php echo number_format($data['total'],2,",",".");?></center></td>
                                <td><center>
                                    <?php 
                                    if ($data['status'] == null) {
                                        echo 'Menunggu Konfirmasi Oleh Admin';
                                    }else{ 
                                        echo $data['status']; 
                                    }?>
                                        
                                    </center></td>
                                <td><center><div id="thanks"><a class="btn btn-sm btn-danger" data-placement="bottom" data-toggle="tooltip" title="Cetak Invoice" href="cetak-po.php?hal=cetak&kd=<?php echo $data['no_po'];?>"><span class="glyphicon glyphicon-print"></span></a> 
                                <a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Status PO" href="status-po.php?hal=status&kd=<?php echo $data['no_po'];?>"><span class="glyphicon glyphicon-tag"></span></a> 
                                <?php if ($data['status'] == 'Terkirim') { ?>
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Konfirmasi Terima Barang" href="kon-po-terima.php?hal=edit&kode=<?php echo $data['no_po'];?>"><span class="glyphicon glyphicon-check"></span></a>  

                                <?php}else if ($data['status'] == 'Selesai') {
                                    
                                }else{ ?>
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit PO Terima" href="edit-po-terima.php?hal=edit&kode=<?php echo $data['no_po'];?>"><span class="glyphicon glyphicon-edit"></span></a>  

                                <?php } ?>
                                </div></center></td>

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