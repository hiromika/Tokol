<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password1 = mysqli_real_escape_string($koneksi,$_POST['password']);
$password = sha1($password1);



if (empty($username) && empty($password)) {
	header('location:index.php?error1');
	
} else if (empty($username)) {
	header('location:index.php?error=2');
	
} else if (empty($password)) {
	header('location:index.php?error=3');
	
}

$q = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['user_id'] = $row['id_user'];
	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];
    $_SESSION['gambar'] = $row['gambar'];
    $_SESSION['role'] = $row['role'];

    if($row['role'] == 1){
		header('location:admin/index.php');
    }else{
		header('location:customer/index.php');
    }

} else {
	header('location:index.php?error=4');
}
 ?>