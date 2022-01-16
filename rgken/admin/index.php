<?php 

session_start();
ob_start();

include 'database.php';

if(isset($_SESSION['admin'])!='yes'){
	include 'register.php';
}
else{
define('guvenlik',true);
include 'head.php';
$domain=isset($_GET["sayfa"]) ? $_GET["sayfa"] : null;

switch($domain){
	case 'anasayfa':
		include 'main.php';
		break;
	
	case 'button':
		include 'button.php';
		break;
	
	case 'calender':
		include 'calender.php';
		break;
	
	case 'charts':
		include 'charts.php';
		break;
	
	case 'gallery':
		include 'gallery.php';
		break;
	case 'faq':
		include 'faq.php';
		break;
	case 'grid':
		include 'grid.php';
		break;
	case 'icons':
		include 'icons.php';
		break;		
	case 'inbox':
		include 'inbox.php';
		break;
	case 'input':			
		include 'input.php';
		break;
	case 'maps':
		include 'maps.php';
		break;	
	case 'tables':
		include 'tables.php';
		break;
	case 'typograpy':
		include 'typogrpy.php';
		break;
	case 'validation':
		include 'validation.php';
		break;
	case 'edition':
		include 'edition.php';
		break;	
	case 'foto':
		include 'resimler.php';
		break;	
	case 'yorum':
		include 'yorum.php';
		break;
	case 'EditDetail':
		include 'EditDetail.php';		
		break;	
	case 'ProjeFoto':
		include 'ProjeFoto.php';		
		break;	
   case 'SilFoto':
		include 'SilFoto.php';		
		break;	
		
   case 'EditYazi':
		include 'EditYazi.php';		
		break;
		
   case 'FotoYaziGüncelleme':
		include 'FotoYaziGüncelleme.php';		
		break;
		
   case 'fotoekle':
		include 'fotoekle.php';		
		break;
		
   case 'fotoeklekod':
		include 'fotoeklekod.php';		
		break;
		
   case 'yorum':
		include 'yorum.php';		
		break;
		
   case 'yorum_onay':
		include 'yorum_onay.php';		
		break;

   case 'yorum_sil':
		include 'yorum_sil.php';		
		break;
	
   case 'myBlog':
		include 'myBlog.php';		
		break;
		
	case 'exit':
		session_destroy()
		?>
		<script>
			alert('basarıyla çıkıs yaptınız');
			window.location.href='index.php';
		</script>
		<?php
		break;				
	default:
		include 'main.php';
		break;
	}
include 'footer.php';
}
?>

