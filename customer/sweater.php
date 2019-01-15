
<?php include "header.php"; ?>
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Sweater&Jacket</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container"> 
        <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->            
      		<!-- start: Row -->
            
      		<div class="row">
	<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE jenis='Sweater' order by kode DESC");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="../admin/<?php echo $data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Details</a> <a href="addtocart.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-success">Buy &raquo;</a></div>

                    </div>
        		</div>
                <?php   
              }
              }
              
              ?>
<!---->
      		</div>
			<!-- end: Row -->
					
					
				</div>	
				
					
				</div>
				
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
				

	</div>
	<!-- end: Wrapper  -->			


	<?php include "footer.php";?>
