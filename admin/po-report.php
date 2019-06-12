<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Laporan PO
        </h1>
        <ol class="breadcrumb">
        Laporan PO
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Laporan PO</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
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
                                                    $query1="SELECT * FROM po";

                                                    if(isset($_POST['qcari'])){
                                                        $qcari=$_POST['qcari'];
                                                        $query1="SELECT * FROM  po
                                                        where nopo like '%$qcari%'
                                                        or kd_cus like '%$qcari%'  ";
                                                    }
                                                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                                    ?>
                                                    <table id="example" class="table table-hover table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><center>No </center></th>
                                                                <th><center>No PO </i></center></th>
                                                                <th><center>Customer </center></th>
                                                                <th><center>Produk </center></th>
                                                                <th><center>Tanggal </center></th>
                                                                <th><center>Color </center></th>
                                                                <th><center>Size </center></th>
                                                                <th><center>Qty </center></th>
                                                                <th><center>Total </center></th>
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
                                                                                <td><center><?php echo $data['color'];?></center></td>
                                                                                <td><center><?php echo $data['size'];?></center></td>
                                                                                <td><center><?php echo $data['qty'];?></center></td>
                                                                                <td>Rp. <?php echo number_format($data['total'],2,",",".");?></td>
                                                                                <td><center><div id="thanks"><a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Cetak PO" href="cetak-po.php?hal=cetak&kd=<?php echo $data['nopo'];?>"><span class="glyphicon glyphicon-print"></span></a> </div>
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
        $('#example').DataTable({
             buttons: [
            {
                extend : 'excel',
                title : 'Laporan PO',
                exportOptions : {
                    modifier : {
                        // DataTables core
                        order : 'index', // 'current', 'applied',
                        //'index', 'original'
                        page : 'all', // 'all', 'current'
                        search : 'none' // 'none', 'applied', 'removed'
                    },
                    columns: [ 1, 2, 3, 4, 5, 6, 7, 8]
                }
            },{
                extend : 'pdf',
                title : 'Laporan PO',
                exportOptions : {
                    modifier : {
                        // DataTables core
                        order : 'index', // 'current', 'applied',
                        //'index', 'original'
                        page : 'all', // 'all', 'current'
                        search : 'none' // 'none', 'applied', 'removed'
                    },
                    columns: [ 1, 2, 3, 4, 5, 6, 7, 8]
                }
            }

        ]
        });
    })
</script>
<?php include 'footer.php'; ?>

