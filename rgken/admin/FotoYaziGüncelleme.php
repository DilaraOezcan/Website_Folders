<?php
include 'database.php';
$number=$_GET['git'];


$icerik=$_POST['icerik'];

$guncelle=$db_baglan->query("UPDATE projeresim set yazi='$icerik' 
                                        WHERE id=$number");

if(isset($_POST['button'])){
    ?>

    <script>
    window.location.href='ProjeFoto';
    </script>
    <?php
}
?>