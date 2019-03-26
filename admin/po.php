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
                                $cek = mysqli_query($koneksi, "SELECT * FROM po WHERE nopo='$kode'");
                                if(mysqli_num_rows($cek) == 0){
                                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                                }else{
                                    $delete = mysqli_query($koneksi, "DELETE FROM po WHERE nopo='$kode'");
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
                                                <h3 class="panel-title"><i class="fa fa-user"></i> Data Status PO</h3> 
                                            </div>
                                            <div class="panel-body">
                                                <!-- <div class="table-responsive"> -->
                                                    <?php
                                                    $query1="select * from po";

                                                    if(isset($_POST['qcari'])){
                                                        $qcari=$_POST['qcari'];
                                                        $query1="SELECT * FROM  po 
                                                        where nopo like '%$qcari%'
                                                        or status like '%$qcari%'  ";
                                                    }
                                                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                                    ?>
                                                    <table id="example" class="table table-hover table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><center>No </center></th>
                                                                <th><center>No PO </i></center></th>
                                                                <th><center>Style </center></th>
                                                                <th><center>Color </center></th>
                                                                <th><center>Size </center></th>
                                                                <th><center>Tanggal Kirim </center></th>
                                                                <th><center>Tanggal Export</center></th>
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
                                                                        <td><center><?php echo $data['style'];?></center></td>
                                                                        <td><center><?php echo $data['color'];?></center></td>
                                                                        <td><center><?php echo $data['size'];?></center></td>
                                                                        <td><center><?php echo $data['tanggalkirim'];?></center></td>
                                                                        <td><center><?php echo $data['tanggalexport'];?></center></td>
                                                                        <td><center><?php
                                                                        if($data['status'] == 'Proses'){
                                                                            echo '<span class="label label-success">Proses</span>';
                                                                        }
                                                                        else if ($data['status'] == 'Selesai' ){
                                                                            echo '<span class="label label-primary">Selesai</span>';
                                                                        }
                                                                        else if ($data['status'] == 'Terkirim' ){
                                                                            echo '<span class="label label-info">Terkirim</span>';
                                                                        }

                                                                        ?></center></td>
                                                                        <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit PO" href="edit-po.php?hal=edit&kode=<?php echo $data['nopo'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                                            <a onclick="return confirm ('Yakin hapus PO <?php echo $data['nopo'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus PO" href="po.php?hal=hapus&kd=<?php echo $data['nopo'];?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr></div>
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
</script><?php include 'footer.php'; ?>

