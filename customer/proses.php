<?php 

include '../conn.php';

if ($_POST['kode'] == 'get_size') { 
	 $id = split(',', $_POST['id']);              
        $query = mysqli_query($koneksi, "
            SELECT * FROM produk_stock
            WHERE id_produk = '$id[0]' AND warna = '$id[1]'");
   	echo "<select id='size' name='size' class='form-control' required>
            <option value=''  disabled='' selected=''>~ Select Size ~</option>";
            while($dt = mysqli_fetch_assoc($query)){
              echo "<option value='".$dt['id_stock'].','.$dt['ukuran']."'>". $dt['ukuran'].'&nbsp - &nbsp Stock : '. $dt['stock_warna'] ."</option>";
            }         
    echo "</select>";

}else{
  echo "error";
}
	
?>
