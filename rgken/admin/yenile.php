<?php
include 'database.php';
$number=$_GET['git'];




if(isset($_POST['button'])){
	
	$projeID=$_POST['projeID'];
$baslik=$_POST['baslik'];
$icerik=$_POST['icerik'];
$guncelle=$db_baglan->query("UPDATE projedetay set projeID='$projeID',baslik='$baslik', icerik='$icerik' 
                                        WHERE id=$number");
										
    ?>

    <script>
    window.location.href='EditDetail';
    </script>
    <?php
}
?>