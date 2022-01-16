<?php

$number=$_GET["proje"];
$database=$db_baglan->prepare("SELECT * FROM yorum WHERE id=:deger");
$database->execute(array(':deger'=>$number));



    echo "<table align='center' border='20px solid blue' width='400px'>";
        echo "<tr align='center'>";
           echo"<th style='color:black;'><h1>Kommentare</h1></th>";  
        echo "</tr>";
	
    echo "</table>";   


		
while($show=$database->fetch(PDO::FETCH_ASSOC)){
    $name=$show["isim"];
	$yorum=$show["yorum"];
	$id=$show['id'];
    echo "<table align='center' border='1' width='900px'>";

    echo "<tr>";
	echo"<td style='color:black;'> Name: </td>";
    echo"<td style='color:black;'><p align='center'>$name</p></td>";
    echo "</tr>";

    echo "<tr>";
	echo"<td style='color:black;'> Kommentar: </td>";
        echo"<td style='color:black;'><p align='center'>$yorum</p></td>";
    echo "</tr>";
	
	    echo "<tr>";
        echo"<td align='center' COLSPAN='2'><a href='onayla.php?git=$id' ><font size='3'>OK</font></a> &nbsp;&nbsp;&nbsp;<a href='sil.php?git=$id' ><font size='3'>Löschen</font></a> &nbsp;&nbsp;&nbsp;<a href='duzenle.php?git=$id'><font size='3'>Ändern</font></a> </td>";
    echo "</tr>";
	
echo "</table>";
echo '<br/>';echo '<br/>';
}
?>