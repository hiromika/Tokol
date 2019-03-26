
    
<?php include "header.php"; ?>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">
 
			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Product Details</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	
      		<!-- start: Row -->
            
  
                <?php                  
                    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode='$_GET[kd]'");
                    $data  = mysqli_fetch_array($query);
                ?>
        		<!--<div class="span4">-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-lg-6">
                            <img class="img img-responsive" src="../admin/<?php echo $data['gambar']; ?>" />
                        </div>
                        <div class="col-md-6">
                            <table class="table-responsive table table-responsive">
                                <thead>
                                    <tr>
                                        <th colspan="3"><div class="title"><h2><?php echo $data['nama']; ?></h2></div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td><h3>Rp. <?php echo number_format($data['harga'],2,",",".");?></h3></td>
                                    </tr>
                                    <tr>
                                        <td>Stock</td>
                                        <td>:</td>
                                        <td>
                                            <h3>
                                                <?php if ($data['stok'] >= 1){
                                                echo '<strong style="color: blue;">In Stock (Tersedia)</strong>';   
                                                } else {
                                                echo '<strong style="color: red;">Out Of Stock (Kosong)</strong>';  
                                                }; ?>   
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>:</td>
                                        <td>
                                            <select id="size" name="size" class="form-control" required>
                                                <option value="All Size">All Size</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>:</td>
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
                                        <td colspan="3">
                                            <div class="clear pull-right"> 
                                                <a href="addtocart.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-success">Buy</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
			

	<?php include "footer.php"; ?>
