<?php 
include "../conn.php";

	$nopo	 = $_GET['kode'];

	$update = mysqli_query($koneksi, "UPDATE po SET status ='Barang Diterima' WHERE nopo='$nopo'") or die(mysqli_error());
	if($update){
		echo "<script>alert('Data Po Terima berhasil diupdate!'); window.location = 'index1.php'</script>";
	}else{
		echo "<script>alert('Data Gagal diupdate!'); window.location = 'index1.php'</script>";
	}

?>