<?php
include 'database.php';
$number=$_GET['git'];
$db_baglan->query("DELETE FROM projedetay  WHERE id=$number");

    ?>
        <script>
        window.location.href='EditDetail';
        </script>
    <?php
?>
