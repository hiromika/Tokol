<?php 
include "../conn.php";

	$nopo	 = $_GET['kode'];

	$hal = $_GET['hal'];

	if ($hal == 'editcus') {
		$update = mysqli_query($koneksi, "UPDATE custom SET status ='Barang Diterima' WHERE kode='$nopo'") or die(mysqli_error());
	}else{
		$update = mysqli_query($koneksi, "UPDATE po SET status ='Barang Diterima' WHERE nopo='$nopo'") or die(mysqli_error());
	}

	if($update){
		if ($hal == 'editcus') {
			echo "<script>alert('Data Po Terima berhasil diupdate!'); window.location = 'index1.php?link=cs'</script>";
		}else{
			echo "<script>alert('Data Po Terima berhasil diupdate!'); window.location = 'index1.php?link='</script>";
		}
		
	}else{

		if ($hal == 'editcus') {
			echo "<script>alert('Data Gagal diupdate!'); window.location = 'index1.php?link=cs'</script>";
		}else{
			echo "<script>alert('Data Gagal diupdate!'); window.location = 'index1.php?link='</script>";
		}
		
	}

?>