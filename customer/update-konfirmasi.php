<?php
include "../conn.php";
if(isset($_POST['update'])){
$namafolder="../admin/bukti_transfer/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	date_default_timezone_set('Asia/Jakarta');
		$jenis_gambar=$_FILES['nama_file']['type'];
        $id_kon	        = $_POST['id_kon'];
	    $nopo	        = $_POST['nopo'];
	    $kd_cus	        = $_POST['kd_cus'];
	    $bayar_via      = $_POST['bayar_via'];
	    $tanggal        = date('Y-m-d H:i:s');
        $jumlah         = str_replace('.', '', $_POST['jumlah']);
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="UPDATE konfirmasi SET bayar_via='$bayar_via', tanggal='$tanggal', jumlah='$jumlah', bukti_transfer='$gambar', status='Menuggu Konfirmasi Oleh Admin' WHERE id_kon='$id_kon'" or die(mysqli_error());
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());

			$sql2="UPDATE po SET status='Menuggu Konfirmasi Oleh admin' WHERE nopo='$nopo'" or die(mysqli_error());
			$res2=mysqli_query($koneksi, $sql2) or die (mysqli_error());
			//echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Konfirmasi berhasil diupdate!'); window.location = 'index1.php?link='</script>";	   
		} else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index1.php?link='</script>";	   
		  
		}
   } else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index1.php?link='</script>";	   
		
   }
} else {
            echo "<script>alert('Terjadi Kesalahan!'); window.location = 'index1.php?link='</script>";	   
	
}
}