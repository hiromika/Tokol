<?php
include "../conn.php";
if(isset($_POST['input'])){

			if ($_GET['hal'] == 'cus' ) {
				$sq = mysqli_query($koneksi, "UPDATE custom SET no_surat_jalan = '$_POST[surat_jalan]', tgl_kirim = CURRENT_TIMESTAMP, status = 'Barang Telah Dikirim' WHERE kode = '$_POST[nopo]'");
			}else{
				$sq = mysqli_query($koneksi, "UPDATE po SET no_surat_jalan = '$_POST[surat_jalan]', tgl_kirim = CURRENT_TIMESTAMP, status = 'Barang Telah Dikirim' WHERE nopo = '$_POST[nopo]'");
			}
				if($sq){
					if ($_GET['hal'] == 'cus' ) {
						echo "<script>alert('Data berhasil disimpan!'); window.location = 'custom.php'</script>";
					}else{
						echo "<script>alert('Data berhasil disimpan!'); window.location = 'po-terima.php'</script>";
					}

				}else{
					if ($_GET['hal'] == 'cus' ) {
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan !</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan !</div>';
					}
				}
			}
            ?>