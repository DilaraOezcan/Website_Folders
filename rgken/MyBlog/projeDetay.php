<?php


$number=$_GET["proje"];
$database=$db_baglan->prepare("SELECT * FROM projedetay WHERE id=:deger");
$database->execute(array(':deger'=>$number));
$projem=$database->fetch(PDO::FETCH_ASSOC);


$proje_ID= $projem['projeID'];
$proje_Baslik= $projem['Baslik'];
$proje_Icerik= $projem['icerik'];
$goruntulenme=$projem['goruntulenme']+1;

$db_baglan->query("UPDATE projedetay set goruntulenme=$goruntulenme WHERE id=$number");

echo "<br><br>";

echo "<table align='center' border='50' width='600px'>";
    echo "<tr>";

        echo"<td style='color:grey;'><h1 align='center'>$proje_ID</h1></td>";
    echo "</tr>";
    echo "<tr>";
        echo"<td style='color:grey;' ><h3 align='center'>$proje_Baslik</h3></td>";
    echo "</tr>";
	echo"<tr> <td><br></td> </tr>";
    echo "<tr>";
		echo"<td style='color:black;' text-align: left;><p>$proje_Icerik</p></td>";
    echo "</tr>";
    echo "<tr>";
    echo"<td style='color:brown;'><p style='text-align:center;'>gesehen: $goruntulenme</p></td>";
    echo "</tr>";

echo "</table>";
echo '<br/>';echo '<br/>';



?>