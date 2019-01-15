
	<?php include "header.php"; ?>
	<style type="text/css" media="screen">
		.da-dots{
			visibility: collapse;
		}
	</style>
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>T-Shirt Casual</h2>
				<p>Kami memproduksi kaos casual yang nyaman untuk anda kenakan setiap hari & buat desain kaos yang kalian inginkan. </p>
				<div class="da-img"><img src="assets/img/parallax-slider/kaos.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Kemeja</h2>
				<p>Kami memproduksi kemeja yang dapat dicustom. Biasa digunakan sebagai seragam untuk komunitas ataupun untuk keperluan suatu acara resmi.</p>
				<div class="da-img"><img src="assets/img/parallax-slider/kemeja2.png" alt="image03" /></div>
				
			</div>
			<div class="da-slide">
				<h2>Sweater</h2>
				<p>Kami memproduksi jacket dan sweater, yang dapat di custom sesuai keinginan.</p>
				<div class="da-img"><img src="assets/img/parallax-slider/jaket5.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Setelan</h2>
				<p>Kami memproduksi kaos yang sangat pas untuk anda kenakan setiap hari & kami bisa membuatkan desain kaos sesuai yang kalian inginkan. </p>
				<div class="da-img"><img src="assets/img/parallax-slider/jeans.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
				Click Clothing merupakan toko online dan distributor outlet, yang menyediakan berbagai macam kebutuhan pakaian anda, mulai dari Kaos, Kemeja, Kaos Kerah, Sweater, dll. Kami juga menerima pemesanan Kaos dengan sablon sesuai keinginan pelanggan.
                </p>
        		<p><a class="btn btn-success btn-large" href="profil.php">About Us &raquo;</a></p>
                                
      		</div>

      		<!-- start: Row -->
            
      		<div class="row">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 6");
            while($data = mysqli_fetch_array($sql)){
            ?>
        		<div class="col-md-4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img class="img-responsive img" src="admin/<?php echo $data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear">
							<a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Details</a> 
							<a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="clear"> <a data-toggle="modal" data-target="#myModal" class="btn btn-lg btn-success">Buy &raquo;</a>
						</div>
					
                    </div>
        		</div>
            <?php   
              }
			?>

      		</div>
	
			<hr>
		
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

<?php include "footer.php"; ?>

