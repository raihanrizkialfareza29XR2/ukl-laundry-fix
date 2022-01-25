<?php 
require 'functions.php';
$id = $_GET['id'];
$passwordlam = $_POST['passlama'];
$querypass = "select * from user where role = 'owner'";
$passwordlama = mysqli_query($conn, $querypass);
$passlama = mysqli_fetch_array($passwordlama);
if(md5($passwordlam) != $passlama['password']){
    echo "<script>alert('Password tidak sesuai');location.href='outlet.php';</script>";
} else {
    $sql = "DELETE FROM outlet WHERE id_outlet = " . $_GET['id'];
    $exe = mysqli_query($conn,$sql);
}

if($exe){
    // $success = 'true';
    // $title = 'Berhasil';
    // $message = 'Menghapus Data';
    // $type = 'success';
    // header('location: outlet.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    // header('location: logout.php');
    echo "<script>alert('Outlet telah ditutup terimakasih atas dedikasi anda selama ini');location.href='logout.php';</script>";
}
