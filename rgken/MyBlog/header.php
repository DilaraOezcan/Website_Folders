<?php

include 'Database.php';
$baglan= $db_baglan-> prepare("SELECT* FROM site WHERE anahtar =:deger");
$baglan-> execute(array(':deger' => 'title'));
$title= $baglan-> fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title['deger']?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />



<link href="css/slider.css" rel='stylesheet' type='text/css' />


<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>


<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"><img src="images/G.png" alt="" height="150" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="anasayfa" >Startseite</a></li>
						<li><a href="about">Über mich</a></li>
						<li><a href="gallery">Projekte</a></li>
						<li><a href="typo">Blog</a></li>
						<li><a href="contact">Kontakte</a></li>
						
					</ul>
			</div>
			<div class="header-right">
	
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
			<image src ="Homepage/18.jpg" class= "banner-top" height="15px" width="1095px"/>

			</div>
		</div>
	</div>
	<!--banner-end-->