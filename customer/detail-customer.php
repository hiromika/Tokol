

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
                                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE kd_cus='$_GET[kd_cus]'");
                                        $data  = mysqli_fetch_array($query);
                                        ?>
                                                    <!-- </div> -->
                                        <div class="panel-body">
                                        <div>
                                            <a style="margin-bottom: 10px;" href="index1.php?link=edit_cus&kd_cus=<?php echo $_GET['kd_cus'] ?>" title="" class="btn btn-info pull-right">Edit Profile</a>
                                        </div>
                                        <table id="example" class="table table-hover table-bordered">
                                        <tr>
                                        <td>Kode</td>
                                        <td><?php echo $data['kd_cus']; ?></td>
                                        <td rowspan="9"><div class="pull-right image">
                                                <img src="../admin/<?php echo $data['gambar']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
                                            </div></td>
                                        </tr>
                                        <tr>
                                        <td width="250">Nama</td>
                                        <td width="550"><?php echo $data['nama']; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Alamat</td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                        <td>No Telepon</td>
                                        <td><?php echo $data['no_telp']; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Username</td>
                                        <td><?php echo $data['username']; ?></td>
                                        </tr>
                                        <tr>
                                    </table>

                                    <!--PAGE CONTENT ENDS-->
                                    
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </section>



      