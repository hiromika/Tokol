<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Data Admin
        </h1>
        <ol class="breadcrumb">
        Data Admin
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Admin</h3>
                         <a href="input-admin.php" class="btn btn-xs btn-warning pull-right">Tambah Admin <i class="fa fa-arrow-circle-right"></i></a>
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
                                                <h3 class="panel-title"><i class="fa fa-user"></i> Data Admin </h3> 
                                            </div>
                                            <div class="panel-body">
                                                <!-- <div class="table-responsive"> -->
                                                    <?php
                                                    $query1="SELECT * from user WHERE role = 1";

                                                    if(isset($_POST['qcari'])){
                                                        $qcari=$_POST['qcari'];
                                                        $query1="SELECT * FROM  user 
                                                        where fullname like '%$qcari%' AND role = 1
                                                        or username like '%$qcari%' AND role = 1  ";
                                                    }
                                                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                                    ?>
                                                    <table id="example" class="table table-hover table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><center>No </center></th>
                                                                <th><center>Username </center></th>
                                                                <th><center>Fullname </center></th>
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
                                                                    <td><center><?php echo $data['username'];?></center></td>
                                                                    <td><center><a href="detail-admin.php?hal=edit&kd=<?php echo $data['id_user'];?>"><span class="glyphicon glyphicon-user"></span> 
                                                                        <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Admin" href="edit-admin.php?hal=edit&kd=<?php echo $data['id_user'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                                            <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Admin" href="hapus-admin.php?hal=hapus&kd=<?php echo $data['id_user'];?>"><span class="glyphicon glyphicon-trash"></a></center>
                                                                            </td>
                                                                </tr>

                                                                        <?php   
                                                                    } 
                                                                    ?>
                                                            </tbody>
                                                    </table>
                                                                        <!-- </div>-->

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

