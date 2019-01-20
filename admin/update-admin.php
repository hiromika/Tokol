<?php
include "../conn.php";
$user_id       = $_POST['user_id'];
$username      = $_POST['username'];
$password      = $_POST['password'];
$fullname      = $_POST['fullname'];
$namafolder	   ="gambar_admin/"; //tempat menyimpan file


if (!empty($password)) {
	$jenis_gambar=$_FILES['nama_file']['type'];
		$username= $_POST['username'];
		$password1=$_POST['password'];
        $password=sha1($password1);
        $fullname=$_POST['fullname'];
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
			
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
		{			
			$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
			if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
				$sql="UPDATE user SET username='$username', password='$password', nama='$fullname', gambar='$gambar' WHERE id_user='$user_id'";
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
				echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
				  
			} else {
			echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	

			}
	   } else {
			echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	

	   }
	} else {
		$sql="UPDATE user SET username='$username', password='$password', nama='$fullname' WHERE id_user='$user_id'";
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
				echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
	}
	
}else{
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$jenis_gambar=$_FILES['nama_file']['type'];
			$username= $_POST['username'];
	        $fullname=$_POST['fullname'];
			
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
		{			
			$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
			if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
				$sql="UPDATE user SET username='$username', nama='$fullname', gambar='$gambar' WHERE id_user='$user_id'";
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
				echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
				  
			} else {
			echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	

			}
	   } else {
			echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	

	   }
	} else {
		$sql="UPDATE user SET username='$username', nama='$fullname' WHERE id_user='$user_id'";
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
				echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
	}
}
