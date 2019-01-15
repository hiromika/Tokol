
    
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
            
      		<div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <?php                  
					$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode='$_GET[kd]'");
					$data  = mysqli_fetch_array($query);
					?>
        		<!--<div class="span4">-->
          			<!--<div class="icons-box">-->
                    <div class="hero-unit"  style="margin-left: 20px;">
                    <table class="table table-responsive">
	                    <tr>
	                        <td rowspan="7"><img src="admin/<?php echo $data['gambar']; ?>" /></td>
	                    </tr>
	                    <tr>
	                        <td colspan="4"><div class="title"><h2><?php echo $data['nama']; ?></h2></div></td>
	                    </tr>
	                    <tr>
	                        <td></td>
	                        <td size="200"><h3>Harga</h3></td>
	                        <td><h3>:</h3></td>
							<td><div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div></td>
	                    </tr>
	                    <tr>
	                        <td></td>
	                        <td><h3>Stock</h3></td>
	                        <td><h3>:</h3></td>
	                        <td><div>
	                        	<h3><?php if ($data['stok'] >= 1){
		                           echo '<strong style="color: blue;">In Stock (Tersedia)</strong>';	
	                                } else {
		                           echo '<strong style="color: red;">Out Of Stock (Kosong)</strong>';	
	                                }; ?></h3>
	                            </div>
	                        </td>
	                    </tr>
	                        <!--<tr>
	                        <td></td>
	                        <td><h3>Satuan</h3></td>
	                        <td><h3>:</h3></td>
	                        <td><div><h3><?php //echo $data['br_satuan']; ?></h3></div></td>
	                        </tr>-->
	                    <tr>
	                        <td></td>
	                        <td><h3>Keterangan</h3></td>
	                        <td><h3>:</h3></td>
	                        <td><div><h3><?php echo $data['keterangan']; ?></h3></div></td>
	                    </tr>
						<!--<p>
						
						</p> -->
                        

                        <tr>
	                        <td></td>
	                        <td><h3>Size</h3>
	                        
		                        <div class="text">
		                            <label class="col-sm-6 col-sm-6 control-label"></label>
		                            <div class="col-sm-6">
			                            <select id="size" name="size" class="form-control" required>
			                            <option value="All Size">All Size</option>
			                            </select>
		                              
		                            </div> 
		                        </div>
	                        </td>
                        </tr>

                        <tr>
                        	<td></td>
                        	
                        	<td><h3>Color</h3>
                        	<div class="text">
                            <label class="col-sm-6 col-sm-6 control-label"></label>
	                            <div class="col-sm-6">
		                            <select id="color" name="color" class="form-control" required>
			                            <option value="black">Black</option>
			                            <option value="dark blue">Dark Blue</option>
			                            <option value="red">Red</option>
			                            <option value="grey">Grey</option>
			                            <option value="white">White</option>
		                            </select>
	                              
	                            </div>
                        	</div>
                            </td>
                        </tr>  

                        <tr>
	                        <td></td>
	                        <td></td>
	                        <td></td>
							<td><div class="clear"> <a data-toggle="modal" data-target="#myModal" class="btn btn-lg btn-success">Buy</a></div></td>
                        </tr>                                  

                    </table>
                    </div>
                    <!--</div> -->
        		<!--</div> -->
<!---->
      		</div>
			<!-- end: Row -->
					
					
				</div>	
				
					
				</div>
				
                </div>
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
				

	</div>
	<!-- end: Wrapper  -->			

	<?php include "footer.php"; ?>
    
