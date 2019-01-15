
	<?php include "header.php"; ?>

    <style type="text/css">
    .konten
{
    margin-top: 20px;
    margin-left: 350px;
    margin-right: 15px;
	color: black;
	font-family: calibri;
    font-size: 20px;
    font-weight: none;	
}
.komentar
{
    position: center;
    margin-top: 20px;
    margin-left: 340px;
    margin-right: 15px;
	color: gray;
	font-family: calibri;
    font-size: 14px;
    font-weight: none;	
    border: 1px solid #;
    width: 700px;
    height: 260px;
    overflow: scroll;
}
    </style>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Buku Tamu</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
    	<div class="row">
    	 	<div class="col-md-12">
		        <center>
		        	<div class="title" style="margin-left: ;"><h3>Isi Testimonial untuk mendapatkan update produk terbaru kami.</h3></div>

		        </center>
    	 	</div>
    	 </div> 
    	 <hr>
    	 <div class="row">
    	 	<div class="col-md-12">
    	 		<form class="form-horizontal" id="formku" method="post" action="proses.php" onsubmit="return formCheck(this);">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Nama:</label>
				    <div class="col-sm-10">
				      <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Email:</label>
				    <div class="col-sm-10"> 
				      <input type="email" name="email" class="form-control"  placeholder="Alamat Email">
				    </div>
				  </div> 
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Komentar:</label>
				    <div class="col-sm-10"> 
				      <textarea name="komentar" class="form-control"></textarea>
				    </div>
				  </div>
				
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
						<input class="button" type="submit" value="Kirim"/>
				    </div>
				  </div>
				</form>
    	 	</div>
    	 </div>
     	<div class="row">
     		<div class="col-md-12">
				<div class="komentar">
				<?php
				echo "<head><title>My Guest Book</title></head>";
				$fp = fopen("guestbook.txt","r");
				echo "<table border=0>";

				while ($isi = fgets($fp,250))
				{
				$pisah = explode("|",$isi);
				echo "<tr><td>$pisah[0], $pisah[1]</td></tr>";
				echo "<tr><td><font color=red>$pisah[2]</font>, Bilang</td></tr>";
				echo "<tr><td>$pisah[4]</td></tr>
				<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				}
				echo "</table>"; 
				?>
				</div>
				</div>
				<div class="konten">

				</div>
				</div>
     			
     		</div>
     	</div>
		</div>
		<!--end: Container-->
				


	</div>
	<!-- end: Wrapper  -->			



	<?php include "footer.php"; ?>


<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
    
    <script type="text/javascript">
    x=0;
    $(document).ready(function(){
       $(".komentar").scroll(function(){
        $("span").text(x+=1);
       }); 
    });
    </script>
<!-- end: Java Script -->

</body>
</html>	