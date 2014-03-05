<form action="#" method="post">		


		<?php
		if(isset($_POST['kirim']))
		{
	
		if ($_POST["captcha"]!="")
		{
		include("val_cap.php");
		//exit;
		}
		else {
		echo "<script>alert('Images Verisifikasi Harus Di Isi');document.location='form.php';</script>";// change Tujuan Dengan Nama File Anda
		exit;
		}
		$nama=addslashes($_POST['dname']);
		$email=addslashes($_POST['demail']);
		$telp=addslashes($_POST['dtelp']);
		$pesan=addslashes($_POST['pesan']);
		
		// to email 
		$to = "email@email.com";
		// The subject
		$subject = "SUBJECT";
		// The message
		$message = "Nama Pengirim : $nama <br> Telp Pengirim : $telp <br> Pesan :<br><p>$pesan</p>";
		/* To send HTML mail, you can set the Content-type header. */
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		
		/* additional headers */
		$headers .= "To: Siapa <email@email.com> \r\n";
		$headers .= "From: $nama <$email> \r\n";

		$send=mail($to, $subject, $message, $headers);
	    mail('email@email.com', $subject, $message, $headers);
		}
		
		
	}
		
	
?>	
				<p>				
				Nama<br/>
				<input name="dname" value="" type="text" size="20" /><br/>
				Email<br/>
				<input name="demail" value="" type="text" size="20" /><br/>
				Telepon<br/>
				<input name="dtelp" value="" type="text" size="20" /><br/>
				Saran<br/>
				<textarea name="pesan" rows="10" cols="15"></textarea>
				<br />	
				Captcha<br/>
				<input name="captcha" value="" type="text" size="10" />
				<br>
				<span style="font-size:11px; color:#FF0000">* Silahkan Masukkan Nomor Dibawah Ini</span>
				<br>
				<img src="captcha.php" />
				<br/><br>
				<input  type="submit" name="kirim" value="Kirim" />&nbsp;&nbsp;
				<input  type="reset" />                	

 			</p>		
