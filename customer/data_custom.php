
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
                                        $query1="SELECT * from custom where kd_cus='$kodeku'";
                                        $hasil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                        ?>
                                      <table id="example" class="table table-hover table-bordered">
                                      <thead>
                                          <tr>
                                            <th><center>ID </center></th>
                                            <th><center>Kode </center></th>
                                            <th><center>Nama</i></center></th>
                                            <th><center>Size </center></th>
                                            <th><center>Color </center></th>
                                            <th><center>Model </center></th>
                                            <th><center>Foto Design </center></th>
                                            <th><center>Status </center></th>
                                            <th><center>Tools </center></th>
                                          </tr>
                                      </thead>
                                         <?php 
                                         while($data=mysqli_fetch_array($hasil))
                                        { ?>
                                        <tbody>
                                        <td><center><?php echo $data['kode'];?></center></td>
                                        <td><center><?php echo $data['kd_cus'];?></center></td>
                                        <td><center><?php echo $data['nama'];?></center></td>
                                        <td><center><?php echo $data['size'];?></center></td>
                                        <td><center><?php echo $data['color'];?></center></td>
                                        <td><center><?php echo $data['model'];?></center></td>
                                        <td><center><img src="../assets/custom/<?php echo $data['gambar'];?>" height="80" width="80" class="img-rounded" style="border: 2px solir #333;" /></center></td>
                                        <td><center><?php echo $data['status'];?></center></td>
                                        <td><center><div id="thanks"> 
                                            <?php if ($data['status'] == "Konfirmasi, Silahkan Lakukan Pembayaran") { ?>
                                             <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Konfirmasi Prmbayaran" href="index1.php?link=bayar_edit&kode=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-edit"></span></a>

                                            <?php }else{ ?>
                                            <a class="btn btn-sm btn-primary"  data-placement="bottom" data-toggle="tooltip" title="Edit data" href="index1.php?link=e_cs&kode=<?php echo $data['kode'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                                                
                                            <?php } ?>

                                        </div></center></td>
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

                                    <!--PAGE CONTENT ENDS-->
                                    
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </section>