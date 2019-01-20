<?php
$namafolder="gambar_admin/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
		$username= $_POST['username'];
		$password1=$_POST['password'];
        $password=sha1($password1);
        $fullname=$_POST['fullname'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO user(username,password,nama,gambar,role) VALUES
            ('$username','$password','$fullname','$gambar','1')";
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
			  
		} else {
		echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'input-admin.php'</script>";	

		}
   } else {
		echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'input-admin.php'</script>";	

   }
} else {
	echo "<script>alert('Anda belum memilih gambar'); window.location = 'input-admin.php'</script>";
}

/*include "../conn.php";
$user_id  = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$query = mysql_query("INSERT INTO admin (user_id, username, password, fullname) VALUES ('$user_id', '$username', '$password', '$fullname')");
if ($query){
	echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
} else {
	echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	
}*/


?>