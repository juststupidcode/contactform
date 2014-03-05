<?php
session_start();



if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "<script>alert('Terima Kasih Telah Menghubungi Kami, Kami Akan Segera Menghubungi Anda Melalui Email');document.location='form.php';</script>";
		

//Do you stuff
}
else
{
echo "<script>alert('Images Verisifikasi Yang Anda Masukan Salah');document.location='form.php';</script>";
		exit;
}


?>
