<?php
include "../conn.php";
if(isset($_POST['input'])){
				$nopo	= $_POST['nopo'];
				$style	= $_POST['style'];
				$color  = $_POST['color'];
				$size	= $_POST['size'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM po WHERE nopo='$nopo'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO po(nopo, style, color, size, tanggalkirim, tanggalexport, status)
															VALUES('$nopo','$style', '$color', '$size', CURRENT_DATE, CURRENT_DATE, 'Proses')") or die(mysqli_error());
						if($insert){
							echo "<script>alert('Data PO berhasil disimpan!'); window.location = 'customer.php'</script>";
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Departement Gagal Di simpan !</div>';
						}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NIP Sudah Ada..!</div>';
				}
			}
            ?>