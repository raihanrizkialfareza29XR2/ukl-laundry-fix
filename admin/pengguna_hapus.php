<?php 
require 'functions.php';
$id = $_GET['id'];
$passwordlam = $_POST['passlama'];
$querypass = "select * from user where role = 'owner'";
$passwordlama = mysqli_query($conn, $querypass);
$passlama = mysqli_fetch_array($passwordlama);
if(md5($passwordlam) != $passlama['password']){
    echo "<script>alert('Password tidak sesuai');location.href='pengguna.php';</script>";
} else {
    $sql = "DELETE FROM user WHERE id_user = " . $_GET['id'];
    $exe = mysqli_query($conn,$sql);
}

if($exe){
	$success = 'true';
    $title = 'Berhasil';
    $message = 'Menghapus Data';
    $type = 'success';
    header('location: pengguna.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
}
 ?>

