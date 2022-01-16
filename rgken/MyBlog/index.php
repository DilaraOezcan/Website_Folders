<?php

define('guvenlik', true);

include 'Database.php';

include 'header.php';

$sayfa=isset($_GET["sayfa"]) ? $_GET["sayfa"] : null;


switch($sayfa){

	case 'anasayfa':
		include 'anasayfa.php';
		break;
		
		case 'about':
			include 'about.php';
			break;
			
		case 'gallery':
			include 'gallery.php';
			break;
		
		case 'typo':
			include 'typo.php';
			break;
			
		case 'contact':
			include 'contact.php';
			break;
			
		case 'projeDetay':
			include 'projeDetay.php';
			break;
			
		case 'projeResim':
			include 'projeResim.php';
			break;
			
		case 'ProjeYorumlari':
			include 'ProjeYorumlari.php';
			break;

default:
include 'anasayfa.php';
break;
	
}
	


include 'footer.php';

?>

