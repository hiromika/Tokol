<?php

session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";

        $a = "Belum Dibayar";
        $b = $_GET['total'];
        $c = date("Y-m-d H:i:s");
     

        $input = mysqli_query($koneksi, "INSERT INTO po(kd_cus, kode, id_stock, color, size, qty, total) SELECT session, kode, id_stock, color, size, qty, jumlah FROM cart WHERE session='$_SESSION[user_id]'") or die(mysqli_error());
        $nopo = mysqlI_insert_id($koneksi);
        $query1 = mysqli_query($koneksi, "INSERT INTO konfirmasi (nopo, kd_cus, bayar_via, tanggal, jumlah, bukti_transfer, status) VALUES ($nopo, '$_SESSION[user_id]', '0', '$c', '$b', 0, '$a')") or die(mysqli_error());
                     
                      
        if ($query1 and $input) {
                                     
                    $delete = mysqli_query($koneksi, "DELETE FROM cart WHERE session='$_SESSION[user_id]'"); 
                    echo "<script>alert('Checkout Sukses, lakukan pembayaran..'); window.location = 'index1.php?link=po'</script>";
                
            } else {
                echo "<script>alert('Checkout Gagal !'); window.location = 'index.php'</script>";

            }
    
}
?>