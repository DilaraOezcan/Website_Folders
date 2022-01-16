<?php
include 'database.php';
$number=$_GET['git'];
$db_baglan->query("DELETE FROM mesaj  WHERE id=$number");

    ?>
        <script>
        window.location.href='edition';
        </script>
    <?php
?>
