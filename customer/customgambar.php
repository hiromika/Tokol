
    
  <?php include "header.php"; ?>
  
  <!-- start: Slider -->
  <div id="page-title">

    <div id="page-title-inner">

      <!-- start: Container -->
      <div class="container">

        <h2><i class="ico-stats ico-white"></i>Custom Desain Anda</h2>

      </div>
      <!-- end: Container  -->

    </div>  

  </div>
  <!-- end: 
  <!-- end: Slider -->
      
  <!--start: Wrapper-->
  <div id="wrapper">
        
    <!--start: Container -->
      <div class="container">
      <!-- start: Table -->
            <div class="title"><h3>Cara Upload Gambar Untuk Desain Custom</h3></div>

  <div id="wrapper">
        
    <!--start: Container -->
      <div class="container">
  
          <!-- start: Hero Unit - Main herounit for a primary marketing message or call to action -->

            <blockquote style="font-size: medium;">
            <b></b>
            
            Untuk mengupload desain gambar sesuai keinginan anda. Kalian bisa mengupload gambar pada web ini. Untuk desain yang bisa di custom gambar hanya untuk Kaos(T-shirt). <br/> <br />
            </blockquote>
       
<?php

      ?>
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Input Data Produk Custom </h3> <br/> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="input_custom.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <table class="table table-hover table-striped">
						  <tr>
                            <td><label class="col-sm-2 col-sm-2 control-label">Name </label></td>
							<td> <input name="nama" type="text" id="nama" class="form-control" autocomplete="off" placeholder="Nama Anda" autocomplete="off" required />
                           </td>
                            </tr>
                        <tr>
                              <td>
                            <label class="col-sm-2 col-sm-2 control-label">Size</label>
                              </td>
                              <td>
                            <select id="size" name="size" class="form-control" required>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                            </select>
                              
                            </td>
                          </tr>
                          <tr>
                          <td>
                              <label class="col-sm-2 col-sm-2 control-label">Color</label>
                          </td>
                          <td>
                            <select id="color" name="color" class="form-control" required>
                            <option value="black">Black</option>
                            <option value="dark blue">Dark Blue</option>
                            <option value="red">Red</option>
                            <option value="grey">Grey</option>
                            <option value="white">White</option>
                            </select>
                            </td>
                            </tr>
                            <tr>
                          <td>
                              <label class="col-sm-2 col-sm-2 control-label">Model</label>
                              </td>
                              <td>
                            <select id="model" name="model" class="form-control" required>
                            <option value="short">Short Sleeve</option>
                            <option value="long">Long Sleeve</option>
                            
                            </select>
                          </td>
                          </tr>
                          <tr>
                         <td>
                              <label class="col-sm-2 col-sm-2 control-label">Gambar Custom</label>
                         </td>
                         <td>
                            <input name="myFile" type="file" id="myFile" class="form-control" required />
                           </td>
                          </tr>
                         <tr>
                         <td>
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              </td>
                              <td>
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                <a href="index.php" class="btn btn-sm btn-danger">Batal </a>
                             </td>
                         </tr>
                           </table>
                      </form>
                  </div>
                  </div>
                  </div>
              </div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

      <hr>
      
      
        </div>
        <!-- end: Icon Boxes -->
        <div class="clear"></div>
      </div>
      <!-- end: Row -->
      
      <hr>
      
    </div>
    </div>
    <!--end: Container-->
  
  </div>
  <!-- end: Wrapper  -->      

<?php include "footer.php"; ?>


