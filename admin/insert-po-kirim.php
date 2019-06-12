<?php
include "../conn.php";
if(isset($_POST['input'])){

				$sq = mysqli_query($koneksi, "UPDATE po SET no_surat_jalan = '$_POST[surat_jalan]', tgl_kirim = CURRENT_TIMESTAMP, status = 'Barang Telah Dikirim' WHERE nopo = '$_POST[nopo]'");
			
				if($sq){
					echo "<script>alert('Data PO berhasil disimpan!'); window.location = 'po-terima.php'</script>";
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Gagal Di simpan !</div>';
				}
			
			}
            ?>