<?php
include 'database.php';
 $number=$_GET["git"];

 $db_baglan->query("UPDATE yorum set onay=0 WHERE id=$number");
    ?>
        <script>
            alert("Kommentar wurde gelöscht");
        window.location.href='yorum';
        </script>
    <?php

?>
