<?php
$bul=$db_baglan->query("SELECT * FROM projedetay");
    echo "<table align='center' border='20px solid blue' width='400px'>";
        echo "<tr align='center'>";
           echo"<th style='color:black;'><h1>Nachrichten</h1> </th>";  
		  
        echo "</tr>";
	
    echo "</table>";   

echo"<br><br><br>";
		
while($show=$bul->fetch(PDO::FETCH_ASSOC)){
    $projeID=$show["projeID"];
    $Baslik=$show['Baslik'];
    $icerik=$show["icerik"];
	$id=$show['id'];
    echo "<table align='center' border='1' width='900px'>";
    echo "<tr>";
		echo"<td style='color:black;'> Name: </td>";
        echo"<td style='color:black;'><h3 align='center'>$projeID</h3></td>";
    echo "</tr>";
    echo "<tr>"; 
	echo"<td style='color:black;'> Email: </td>";	
    echo"<td style='color:blue;' text-align: left;><p>$Baslik</p></td>";
    echo "</tr>";
    echo "<tr>";
	echo"<td style='color:black;'> Nachricht: </td>";
        echo"<td style='color:black;'><p align='center'>$icerik</p></td>";
    echo "</tr>";
	
	    echo "<tr>";
        echo"<td align='center' COLSPAN='2'><font size='3'>Löschen</font> &nbsp;&nbsp;&nbsp;    
										
											<a href='edit.php?git=$id' ><font size='3'>Bearbeiten</font></td>";
    echo "</tr>";
	
echo "</table>";
echo '<br/>';echo '<br/>';
}
?>
