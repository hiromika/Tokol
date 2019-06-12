<?php
include "../conn.php";
if(isset($_POST['update'])){
$namafolder="../admin/gambar_customer/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
		
		$jenis_gambar=$_FILES['nama_file']['type'];
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
	        $kode     = $_POST['kd_cust'];
	        $nama     = $_POST['nama'];
			$alamat   = $_POST['alamat'];
			$no_telp  = $_POST['no_telp'];
	        $username = $_POST['username'];
       		$password = $_POST['password'];

			if ( isset($_POST['password'])) {
	        $passwords = sha1($_POST['password']);
				$sql="UPDATE user SET nama='$nama', alamat='$alamat', no_telp='$no_telp', username='$username', password='$passwords', gambar='$gambar' WHERE kd_cus='$kode'" or die(mysqli_error());
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			}else{
				$sql="UPDATE user SET nama='$nama', alamat='$alamat', no_telp='$no_telp', username='$username', gambar='$gambar' WHERE kd_cus='$kode'" or die(mysqli_error());
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			}
			//echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Customer berhasil diupdate!'); window.location = 'index1.php?link=p&hal=edit&kd_cus=".$kode."'</script>";	   
		} else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index1.php?link=p&hal=edit&kd_cus=".$kode."'</script>";	   
		}
   } else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index1.php?link=p&hal=edit&kd_cus=".$kode."'</script>";	   
		
   }
} else {

        $kode     = $_POST['kd_cust'];
        $nama     = $_POST['nama'];
		$alamat   = $_POST['alamat'];
		$no_telp  = $_POST['no_telp'];
        $username = $_POST['username'];
       	$password = $_POST['password'];
		
			if ( isset($_POST['password'])) {
				$passwords = sha1($_POST['password']);
				$sql="UPDATE user SET nama='$nama', alamat='$alamat', no_telp='$no_telp', username='$username', password='$passwords' WHERE kd_cus='$kode'" or die(mysqli_error());
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			}else{
				$sql="UPDATE user SET nama='$nama', alamat='$alamat', no_telp='$no_telp', username='$username' WHERE kd_cus='$kode'" or die(mysqli_error());
				$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			}
			//echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Customer berhasil diupdate!'); window.location = 'index1.php?link=p&hal=edit&kd_cus=".$kode."'</script>";	   

	}
}