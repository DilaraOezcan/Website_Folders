<?php
include 'database.php';
$number=$_GET['git'];
$db_baglan->query("DELETE FROM projeresim  WHERE id=$number");

    ?>
        <script>
        window.location.href='ProjeFoto';
        </script>
    <?php
?>