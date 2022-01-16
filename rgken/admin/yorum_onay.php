<?php
include 'database.php';
 $number=$_GET["git"];
$bul=$db_baglan->query("SELECT * FROM yorum");
 $show=$bul->fetch(PDO::FETCH_ASSOC);
 $db_baglan->query("UPDATE yorum set onay=1 WHERE id=$number");
    ?>
        <script>
            alert(" Erlaubnis Status geändert");
        window.location.href='yorum';
        </script>
    <?php

?>
