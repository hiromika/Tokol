
    
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
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
      <!-- end: Hero Unit -->

          <!-- start: Row -->
            
          
      <!-- end: Row -->
          
    <!--  <hr>
    
      <!-- start Clients List --> 
    <!--  <div class="clients-carousel">
    
        <ul class="slides clients">
          <li><img src="img/logos/1.png" alt=""/></li>
          <li><img src="img/logos/2.png" alt=""/></li>  
          <li><img src="img/logos/3.png" alt=""/></li>
          <li><img src="img/logos/4.png" alt=""/></li>
          <li><img src="img/logos/5.png" alt=""/></li>
          <li><img src="img/logos/6.png" alt=""/></li>
          <li><img src="img/logos/7.png" alt=""/></li>
          <li><img src="img/logos/8.png" alt=""/></li>
          <li><img src="img/logos/9.png" alt=""/></li>
          <li><img src="img/logos/10.png" alt=""/></li>   
        </ul>
    
      </div>
      <!-- end Clients List -->
<?php
/** if(isset($_POST['input'])){
$namafolder="gambar_produk/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['nama_file']['type'];
        $kode       = $_POST['kode'];
    $nama       = $_POST['nama'];
    $jenis      = $_POST['jenis'];
        $harga      = $_POST['harga'];
        $keterangan = $_POST['keterangan'];
        $stok       = $_POST['stok'];
      
  if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
  {     
    $gambar = $namafolder . basename($_FILES['nama_file']['name']);   
    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
      $sql="INSERT INTO produk(kode,nama,jenis,harga,keterangan,stok,gambar) VALUES
            ('$kode','$nama','$jenis','$harga','$keterangan','$stok','$gambar')";
	
  
      $res=mysqli_query($koneksi, $sql and $query) or die (mysqli_error());
      //echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Produk berhasil dimasukan!'); window.location = 'produk.php'</script>";    
    } else {
       echo "<p>Gambar gagal dikirim</p>";
    }
   } else {
    echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
  echo "Anda belum memilih gambar";
}
}

**/
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


