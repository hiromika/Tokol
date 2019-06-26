<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Click Clothing | Toko Online</title> 
	<meta name="description" content="Website, Corporate, Bekasi, Garment, Sablon, Konveksi"/>
	<meta name="keywords" content="Bahan, Pakaian, Baju, Sablon" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body style=" height: 100%;">
    
<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo col-md-3">
						
					<a class="brand" href="index.php">
						<p style="font-size: 40px;">Click Clothing</p>
						<!-- <img src="assets/img/logo1.png" alt="Logo"> -->
					</a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="col-md-9">
					
					<div class="navbar navbar-inverse">
			    		<div class="container-fluid">
			          	
			            		<ul class="nav navbar-nav">
			              			<li class="active"><a href="index.php">Home</a></li>
			              			<li><a href="produk.php">Product</a></li>
                              <!--       <li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="produk.php">Kaos</a></li>
			                  				<li><a href="kemeja.php">Kemeja</a></li>
			                  				<li><a href="sweater.php">Sweater&Jacket</a></li>
			                  				<li><a href="polo.php">Kaos Kerah(Polo)</a></li>
			                			</ul>
			              			</li> -->
			              			<li><a href="customgambar.php">Custom</a></li>	            
									<li><a href="testimoni.php">Testimonial</a></li>
                                    <!-- <li><a href="detail.php">Cart</a></li>-->
                                    <li><a href="profil.php">About Us</a></li>
			              			<li class="dropdown">
			                			<a href="#" data-toggle="modal" data-target="#myModal">Login</a>
			              			</li>
			            		</ul>
			          		
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-signin" method="post" action="proseslogin.php">
	        <h2 class="form-signin-heading"><center> Login</center></h2>
	        <hr>
	        <div class="form-group">
	        	<input name="username" id="username" type="input" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
	        </div>
	        <div class="form-group">
	        	<input name="password" id="password" type="password" class="form-control" placeholder="Password" autocomplete="off" required>	
	        </div>
	        <div class="form-group">
	        	<button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
	        </div>

	        <br />
	        <p>Belum punya akun.? silahkan <a href="register.php"></b>Daftar</b></p></h5>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>