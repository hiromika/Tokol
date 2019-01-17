<?php
include "../conn.php";
if(isset($_POST['update'])){
$namafolder="../admin/bukti_transfer/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
        $id_kon	        = $_POST['id_kon'];
	    $nopo	        = $_POST['nopo'];
	    $kd_cus	        = $_POST['kd_cus'];
	    $bayar_via      = $_POST['bayar_via'];
	    $tanggal        = $_POST['tanggal'];
        $jumlah         = $_POST['jumlah'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="UPDATE konfirmasi SET bayar_via='$bayar_via', tanggal='$tanggal', jumlah='$jumlah', bukti_transfer='$gambar' WHERE id_kon='$id_kon'" or die(mysqli_error());
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			//echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Konfirmasi berhasil diupdate!'); window.location = 'index.php'</script>";	   
		} else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index.php'</script>";	   
		  
		}
   } else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index.php'</script>";	   
		
   }
} else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index.php'</script>";	   
	
}
}