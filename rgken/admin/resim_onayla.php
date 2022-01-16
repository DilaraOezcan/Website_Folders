<?php
include 'database.php';
$number=$_GET['git'];
$bul=$db_baglan->query("SELECT * FROM resimler");
while($show=$bul->fetch(PDO::FETCH_ASSOC)){
    $db_baglan->query("UPDATE resimler set resim_onay=0");
}
$db_baglan->query("UPDATE resimler set resim_onay=1 WHERE resim_id=$number");
    ?>
        <script>
        window.location.href='index';
        </script>
    <?php

?>