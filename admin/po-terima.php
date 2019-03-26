<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Data PO
        </h1>
        <ol class="breadcrumb">
        Data PO
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data PO</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        
                
                         <?php
                         if(isset($_GET['hal']) == 'hapus'){
                            $kode = $_GET['kd'];
                            $cek = mysqli_query($koneksi, "SELECT * FROM po_terima WHERE id='$kode'");
                            if(mysqli_num_rows($cek) == 0){
                                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                            }else{
                                $delete = mysqli_query($koneksi, "DELETE FROM po_terima WHERE id='$kode'");
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
                        <!-- Main row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user"></i> Data PO Terima</h3> 
                                    </div>
                                    <div class="panel-body">
                                        <!-- <div class="table-responsive"> -->
                                            <?php
                                            $query1="SELECT *,a.nopo as nopo_ ,a.size as size_, a.color as color_ , a.qty as qty_ , a.style as style_   from po_terima a LEFT JOIN po b ON a.nopo = b.nopo  order by a.nopo DESC";

                                            if(isset($_POST['qcari'])){
                                                $qcari=$_POST['qcari'];
                                                $query1="SELECT *,a.nopo as nopo_, a.size as size_, a.color as color_ , a.qty as qty_ , a.style as style_  FROM  po_terima a LEFT JOIN po b ON a.nopo = b.nopo  
                                                where a.nopo  like '%$qcari%' 
                                                or a.kd_cus like '%$qcari%'";
                                            }
                                            $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                            ?>
                                            <table id="example" class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><center>No </center></th>
                                                        <th><center>ID PO </i></center></th>
                                                        <th><center>Customer </center></th>
                                                        <th><center>Produk </center></th>
                                                        <th><center>Tanggal </center></th>
                                                        <th><center>Style </center></th>
                                                        <th><center>Color </center></th>
                                                        <th><center>Size </center></th>
                                                        <th><center>Qty </center></th>
                                                        <th><center>Total </center></th>
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
                                                                <td><?php echo $data['nopo'];?></td>
                                                                <td><a href="detail-customer.php?hal=edit&kd=<?php echo $data['kd_cus'];?>"><span class="glyphicon glyphicon-user"></span> <?php echo $data['kd_cus'];?></td>
                                                                    <td><a href="detail-produk.php?hal=edit&kd=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-tag"></span> <?php echo $data['kode'];?></td>
                                                                        <td><center><?php echo $data['tanggal'];?></center></td>
                                                                        <td><center><?php echo $data['style_'];?></center></td>
                                                                        <td><center><?php echo $data['color_'];?></center></td>
                                                                        <td><center><?php echo $data['size_'];?></center></td>
                                                                        <td><center><?php echo $data['qty_'];?></center></td>
                                                                        <td>Rp. <?php echo number_format($data['total'],2,",",".");?></td>
                                                                        <td><center><?php 
                                                                        if ($data['status'] == null) {
                                                                            echo 'Menunggu Konfirmasi';
                                                                        }else{
                                                                            echo $data['status'];

                                                                        }

                                                                        ?></center></td>
                                                                        <td><center><div id="thanks">
                                                                            <?php if ($data['status'] ='Proses') {

                                                                            }else{ ?>

                                                                                <a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Konfirmasi PO" href="input-po-kirim.php?hal=tambah&nopo=<?php echo $data['nopo_'];?>"><span class="glyphicon glyphicon-check"></span></a> 

                                                                            <?php } ?>

                                                                            <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit PO Terima" href="edit-po-terima.php?hal=edit&kode=<?php echo $data['nopo_'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                                            <a onclick="return confirm ('Yakin hapus PO <?php echo $data['nopo_'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus PO Terima" href="po-terima.php?hal=hapus&kd=<?php echo $data['nopo_'];?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr></div>
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

