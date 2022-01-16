<?php
$bul=$db_baglan->query("SELECT * FROM mesaj");
    echo "<table align='center' border='20px solid blue' width='400px'>";
        echo "<tr align='center'>";
           echo"<th style='color:black;'><h1>Nachrichten</h1> </th>";  
		  
        echo "</tr>";
	
    echo "</table>";   

echo"<br><br><br>";
		
while($show=$bul->fetch(PDO::FETCH_ASSOC)){
    $name=$show["isim"];
    $email=$show['mail'];
    $mesaj=$show["mesaj"];
	$id=$show['id'];
    echo "<table align='center' border='1' width='900px'>";
    echo "<tr>";
		echo"<td style='color:black;'> Name: </td>";
        echo"<td style='color:black;'><h3 align='center'>$name</h3></td>";
    echo "</tr>";
    echo "<tr>"; 
	echo"<td style='color:black;'> Email: </td>";	
    echo"<td style='color:blue;' text-align: left;><p>$email</p></td>";
    echo "</tr>";
    echo "<tr>";
	echo"<td style='color:black;'> Nachricht: </td>";
        echo"<td style='color:black;'><p align='center'>$mesaj</p></td>";
    echo "</tr>";
	
	    echo "<tr>";
        echo"<td align='center' COLSPAN='2'><a href='sil.php?git=$id' ><font size='3'>Löschen</font> </td>";
    echo "</tr>";
	
echo "</table>";
echo '<br/>';echo '<br/>';
}
?>
