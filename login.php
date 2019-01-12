<?php
include "koneksi.php";
$nis = $_POST['nis'];
$pass = $_POST['password'];
if (empty($pass)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else if (empty($nis)){
echo "<script>alert('NIS belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}elseif ($nis != 'root' && $pass != 'firmandb'){
session_start();
$login = mysqli_query($conn, "select * from siswa where nis='$nis' and password='$pass'");
if (mysqli_num_rows($login) > 0){
    $row_akun = mysqli_fetch_array($sql_login);
    header("location:berhasil.php");
    }else{
    echo "<script>alert('NIS dan password harap diisi dengan benar')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
}
else
{
session_start();
header ('location:index.php');
}

?>