<?php
$bul=$db_baglan->query("SELECT * FROM resimler");
while($show=$bul->fetch(PDO::FETCH_ASSOC)){
    echo $name=$show['resim_name'];
    $id=$show['resim_id'];
    
    echo "<img src='$name' width='100' height='100'>";
    echo "<a href='resim_onayla.php?git=$id' >onayla</a>".'<br>' ;
}
?>