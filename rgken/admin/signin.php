<?php 
//log in kısmı için gerekli bilgiler kontrol edilir.
//butondan gelen bir cevap var mı diye kontrol ettim 
if(isset($_POST['dosyaici_signin'])){
	$name_sayfa=trim($_POST['dosyaici_kullanıcı']);// trim boslukları silen bir fonksiyondur.
	$password_sayfa=trim($_POST['dosyaici_sifre']);
	//name yada şifre dolu olmalı
	if(!$name_sayfa|| !$password_sayfa){
		?>
		<script>
			alert("name ve şifrenizi lütfen giriniz");
			window.location.href='index.php';
		</script>
		<?php
	//kontrol kısmı	
	}else{
		$kontrol=$db_baglan->prepare('SELECT * FROM users WHERE d_name=:email and db_password=:sifre');
		$kontrol->execute(array(':email'=>$name_sayfa,':sifre'=>$password_sayfa));
		$data= $kontrol->fetch(PDO::FETCH_ASSOC);
		$result=$kontrol->rowCount();
		if($result){
			$_SESSION['id']=$data['id'];
			$_SESSION['admin']='yes';
			//tüm adminlerin aktifligini 0 lar
			$bul=$db_baglan->query("SELECT * FROM users");
			while($show=$bul->fetch(PDO::FETCH_ASSOC)){
    			$db_baglan->query("UPDATE users set active=0");
			}

			$guncelle=$db_baglan->query("UPDATE users set active='1' 
											WHERE d_name='$name_sayfa' AND db_password='$password_sayfa' ");
			?>
				<script>
					alert("basarıyla giris yaptınız");
					window.location.href='index';
				</script>
			<?php
		}else{
			?>
		<script>
			alert("e mail veya sifrede hata var ");
			window.location.href='index.php';
		</script>
		<?php
		}
	}

}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign In :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>admin paneli</h2>
		<form action="index" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="dosyaici_kullanıcı" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="dosyaici_sifre" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
				<a href="#">Forgot Password</a><br>
			</div>
			<div class="login-w3">
					<input type="submit" name="dosyaici_signin" class="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="../">site to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>